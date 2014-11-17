@extends('layout.coralfront')

@section('content')

<!-- User Profile Content -->
<div class="row">
    <!-- First Column -->
    <div class="col-md-4 col-lg-5">
        <!-- Updates Block -->
        <div class="block">
            <!-- Updates Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Privacy Settings"><i class="fa fa-cog"></i></a>
                </div>
                <h2><strong>Upload</strong></h2>
            </div>
            <!-- END Updates Title -->

            <!-- Update Status Form -->
            {{--
            <form action="page_ready_user_profile.html" method="post" class="block-content-full block-content-mini-padding" onsubmit="return false;">
                <textarea id="default-textarea" name="default-textarea" rows="2" class="form-control push-bit" placeholder="What are you thinking?"></textarea>
                --}}
                <div class="clearfix">
                    <a href="#" id="add-playlist" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Playlist"><i class="fa fa-2x fa-list"></i></a>
                    <a href="#" id="add-music" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Music"><i class="fa fa-2x fa-headphones"></i></a>
                    <a href="#" id="add-movie" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Movie"><i class="fa fa-2x fa-film"></i></a>
                    <a href="javascript:addAlbum()" id="add-album" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Album"><i class="fa fa-2x fa-file"></i></a>
                </div>
            {{--</form>--}}
            <!-- END Update Status Form -->
        </div>
        <!-- END Updates Block -->


        <!-- Newsfeed Block -->
        <div class="block">
            <!-- Newsfeed Title -->
            <div class="block-title">
                <div class="block-options pull-right">

                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Refresh">
                        <span id="feed-refresh-anim" style="display:none;"><i class="fa fa-spinner fa-spin "></i></span>
                        <span id="feed-refresh"  ><i class="fa fa-refresh "></i></span>
                    </a>
                </div>
                <h2><strong>Newsfeed</strong></h2>
            </div>
            <!-- END Newsfeed Title -->

            <!-- Newsfeed Content -->
            <div class="block-content-full">
                <!-- You can remove the class .media-feed-hover if you don't want each event to be highlighted on mouse hover -->
                <ul id="feed-list" class="media-list media-feed media-feed-hover">

                </ul>
            </div>
            <!-- END Newsfeed Content -->
        </div>
        <!-- END Newsfeed Block -->
    </div>
    <!-- END First Column -->

    <!-- Second Column -->
    <div class="col-md-6 col-lg-5">

    </div>
    <!-- END Second Column -->
</div>
<!-- END User Profile Content -->
<script type="text/javascript">
    $(document).ready(function(){

        $('#feed-refresh').on('click',function(e){
            e.preventDefault();
            refreshFeed();
        });

        function refreshFeed(){
            $('#feed-refresh').hide();
            $('#feed-refresh-anim').show();
            $.get( '{{ URL::to('feed/feed')}}', function( data ) {
                $('#feed-list').html(data);
                $('audio').audioPlayer();
                videojs(document.getElementsByClassName('video-js')[0], {}, function(){});
                $('#feed-refresh-anim').hide();
                $('#feed-refresh').show();
            });
        }

        refreshFeed();

        setInterval(refreshFeed(), 10000);
    });
</script>

@stop