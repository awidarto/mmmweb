<style type="text/css">
    ol.playlist{
        margin-right: 0px;
    }

    ol.playlist li{
        margin-right: 0px;
        margin-left: 0px;
        padding: 0px 0px;
        border:none;
    }

</style>

<ul class="timeline-activity list-unstyled play-trigger">
    @foreach($feed as $f)
        @if($f->type == 'upload')
            @include('feeddisplay.upload',array('f'=>$f))
        @elseif($f->type == 'listen')
            @include('feeddisplay.listen',array('f'=>$f))
        @elseif($f->type == 'playlist')
            @include('feeddisplay.playlist',array('f'=>$f))
        @elseif($f->type == 'album')
            @include('feeddisplay.album',array('f'=>$f))
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
            if($(e.target).is('.like-toggle')){
                var evid = $(e.target).data('id');
                var mode = 'inc';
                if( $(e.target).hasClass('fa-heart') ){
                    $(e.target).removeClass('fa-heart');
                    $(e.target).addClass('fa-heart-o');
                    mode = 'dec';
                }else{
                    $(e.target).removeClass('fa-heart-o');
                    $(e.target).addClass('fa-heart');
                    mode = 'inc';
                }

                console.log(evid);

                $.post('{{ URL::to('ajax/like') }}',
                    {
                        mode:mode,
                        itemid:evid
                    } ,
                    function(data) {
                        if(data.result == 'OK'){
                            $('#like_' + evid).html(data.count);
                        }
                    },
                    'json');

            }

            if($(e.target).is('.comment-submit')){
                var evid = $(e.target).data('id');

                console.log(evid);

                var comment = $( '#comment_' + evid ).val();

                console.log(comment);


                if(comment != ''){
                    console.log(evid + ' : ' + comment);
                    $.post('{{ URL::to('ajax/comment')}}',
                        {
                            itemid:evid,
                            comment:comment
                        },
                        function(data){
                            if(data.result == 'OK'){
                                var c = data.comment;

                                var comment = @include('feeddisplay.commentjs');

                                $('#commentlist_' + evid).prepend(comment);
                            }else{
                                alert('You must be logged in to comment');
                            }
                        },
                        'json');
                }else{
                    alert('What are you trying to say ?');
                }

            }
        });

    });
</script>