<ul class="timeline-activity list-unstyled play-trigger">
    @foreach($feed as $f)
        @if($f->type == 'upload')
            @include('feeddisplay.upload',array('f'=>$f))
        @elseif($f->type == 'listen')
            @include('feeddisplay.listen',array('f'=>$f))
        @endif
    @endforeach
</ul>
<script type="text/javascript">
    $(document).ready(function(){
        var refresh_url = '{{ $refreshurl }}';
        var lastrefresh = '{{ $lastrefresh }}';

        function refreshTimeline(){
            $('#refreshTimeline i').addClass('fa-spin');
            var nextrefresh = new Date().getTime() / 1000;

            console.log(nextrefresh);

            $.post(
                    refresh_url,
                    {
                        lastrefresh: lastrefresh,
                    },
                    function(data){
                        if(data == ''){
                            $('#refreshTimeline i').removeClass('fa-spin');
                        }else{
                            $('ul.timeline-activity').prepend($(data).hide().fadeIn(5000));
                            $('#refreshTimeline i').removeClass('fa-spin');
                        }
                        lastrefresh = nextrefresh;
                    },'html'
                );
        }

        $('#refreshTimeline').on('click',function(){
            refreshTimeline();
        });

        self.setInterval(function(){
            refreshTimeline();
        },10000);

        $('.timeline-activity').on('click',function(e){
            if($(e.target).is('.comment-submit')){
                var evid = $(e.target).data('id');

                console.log(evid);

                var comment = $( '#comment_' + evid ).val();
                console.log(comment);

                if(comment != ''){
                    $.post('{{ URL::to('ajax/comment')}}',
                        {
                            evid:evid,
                            comment:comment
                        },
                        function(data){
                            if(data.result == 'OK'){
                                $('#commentlist_' + evid).prepend(comment);
                            }
                        },
                        'json');
                }

            }
        });

    });
</script>