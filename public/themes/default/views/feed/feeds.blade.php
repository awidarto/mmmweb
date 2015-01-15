@extends('layout.coralfront')

@section('content')
    <style type="text/css">
        a.update-photo{
            position: absolute;
            top: 6px;
            right: 6px;
            font-size: 24px;
            color: transparent;
        }

        a.update-photo:hover{
            color: #aaa;
        }

        ol li{
            text-align: left;
            line-height: 35px;
        }


    </style>
    <!-- avatar col -->
    <div class="col-md-3 col-sm-4">
        <!-- col-separator.box -->
        <div class="col-separator box col-separator-first reset-components">
            <div class="bg-white">
                <div class="profile-avatar" style="position:relative;">
                    <a class="update-photo" href="{{ URL::to('settings/photo') }}"><i class="fa fa-edit" ></i></a>
                    <div class="text-center">
                        @if(isset(Auth::user()->avatar) && Auth::user()->avatar != '')
                        <img src="{{ Auth::user()->avatar }}" class="img-responsive img-clean" />
                        @else
                            <img src="{{ URL::to('coral')}}/assets/images/people/775/avatar.jpg" class="img-responsive img-clean" />
                        @endif
                    </div>
                </div>

                <div class="innerAll">
                    <h4></i> {{ Auth::user()->fullname }}</h4>
                    <p class="text-muted">{{ Auth::user()->email }}</p>
                </div>
                {{--
                <div class="innerLR innerB center">
                    <div class="btn-group-vertical display-block margin-none">
                        <a href="#" class="btn btn-info"><i class="fa fa-check"></i> Friend</a>
                        <a href="#" class="btn btn-default"><i class="fa fa-comment-o"></i> Chat</a>
                    </div>
                </div>
                --}}
            </div>
            <div class="col-separator-h box"></div>

            <ul class="list-group list-group-1 margin-none">
                {{--
                <li class="list-group-item border-top-none active"><a href="index.html?lang=en"><span class="badge pull-right badge-primary hidden-md">13</span><i class="fa fa-book"></i> Timeline</a></li>
                <li class="list-group-item"><a href="social_messages.html?lang=en"><span class="badge pull-right badge-primary hidden-md">2</span><i class="fa fa-envelope"></i> Messages</a></li>
                --}}
                <li class="list-group-item"><a href="{{ URL::to('settings')}}"><i class="fa fa-user"></i> My Account</a></li>
                <li class="list-group-item"><a href="social_friends.html?lang=en"><i class="fa fa-group"></i> Friends</a></li>
                <li class="list-group-item border-bottom-none"><a href="{{ URL::to('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>

        </div>
        <!-- // END col-separator.box -->

    </div>
    <!-- // END avatar col -->

    <!-- col -->
    <div class="col-lg-9 col-md-10 col-sm-8">

        <!-- col-separator -->
        <div class="col-separator border-none">

            <!-- col-table -->
            <div class="col-table">

                <!-- col-table-row -->
                <div class="col-table-row">

                    <!-- col-app -->
                    <div class="col-app">

                        <!-- row-app -->
                        <div class="row row-app margin-none">

                            <!-- col -->
                            <div class="col-lg-10 col-md-9 col-sm-12">

                                <!-- col-separator -->
                                <div class="col-separator col-unscrollable">

                                    <!-- col-table -->
                                    <div class="col-table">

                                        <!-- box -->
                                        <div class="row row-merge box margin-none">

                                            <!-- col -->
                                            <div class="col-md-6 col-sm-12 reset-components">

                                                <div class="widget widget-tabs widget-tabs-icons-only-2 widget-activity margin-none widget-activity-social">

                                                    <!-- Tabs Heading -->
                                                    <div class="widget-head">
                                                        <ul>
                                                            <li class="active">
                                                                <a data-toggle="tab" href="#listeningTab" class="glyphicons music"><i></i></a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#playlistTab" class="glyphicons playlist"><i></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- // Tabs Heading END -->

                                                    <div class="widget-body padding-none">
                                                        <div class="tab-content">

                                                            <div class="tab-pane active" id="listeningTab">
                                                                <div class="share">
                                                                    <textarea id="listen_say" class="form-control" rows="2" placeholder="Say something about"></textarea>
                                                                    <input type="text" class="form-control auto_media" id="listen_search" placeholder="search title, artist" />
                                                                    <div id="listen_result">
                                                                        <div id="listen_title"></div>
                                                                        <img class="pull-right" src="" id="listen_pic" />
                                                                        <input type="hidden" id="listen_id" />
                                                                        <input type="hidden" id="listen_type" />
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <a class="btn btn-primary btn-sm" id="listen_share" >Share <i class="fa fa-arrow-circle-o-right"></i></a>
                                                                    <span id="sharing_indicator" style="display:none">sharing...</span>
                                                                </div>
                                                                <script type="text/javascript">
                                                                    $(document).ready(function(){
                                                                        var base = '{{ URL::to('/')}}/';

                                                                        $('.auto_media').autocomplete({
                                                                            source: base + 'ajax/media',
                                                                            select: function(event, ui){
                                                                                $('#listen_title').html(ui.item.value);
                                                                                $('#listen_type').html(ui.item.mediatype);

                                                                                $('img#listen_pic').attr('src',ui.item.pic);
                                                                                $('#listen_id').val(ui.item.id);
                                                                            }
                                                                        });

                                                                        $('#listen_share').on('click',function(){
                                                                            var title;
                                                                            var mediaid;
                                                                            var msg = $('#listen_say').val();
                                                                            var mediatype = $('#listen_type').val();

                                                                            if($('#listen_title').html() == ''){
                                                                                title = $('#listen_search').val();
                                                                                mediaid = '';
                                                                            }else{
                                                                                title = $('#listen_title').html();
                                                                                mediaid = $('#listen_id').val();
                                                                            }

                                                                            $('#sharing_indicator').show();
                                                                            $.post(base + 'ajax/listen',
                                                                                {
                                                                                    message:msg,
                                                                                    mediaid:mediaid,
                                                                                    mediatitle:title,
                                                                                    mediatype:mediatype
                                                                                },
                                                                                function(data) {
                                                                                    if(data.result == 'OK'){
                                                                                        $('#listen_title').html('');
                                                                                        $('#listen_id').val('');
                                                                                        $('img#listen_pic').attr('src','');
                                                                                        $('#listen_search').val('');
                                                                                    }
                                                                                    $('#sharing_indicator').hide();
                                                                                    refreshTimeline();
                                                                                },
                                                                            'json');

                                                                        });

                                                                    });
                                                                </script>
                                                            </div>
                                                            <div class="tab-pane innerAll text-center" id="playlistTab">
                                                                <div class="share">
                                                                    <textarea id="playlist_say" class="form-control" rows="2" placeholder="Say something about"></textarea>

                                                                    <input type="text" class="form-control " id="playlist_title" placeholder="name your playlist" />

                                                                    <input type="text" class="form-control auto_playlist_media" id="playlist_search" placeholder="search title, artist" />
                                                                    <div id="playlist_result">
                                                                        <ol id="playlist_list"></ol>
                                                                    </div>
                                                                    <input type="hidden" id="playlist-id" value="" />
                                                                    <div class="clearfix"></div>

                                                                    <a id="playlist-save" class="btn btn-primary btn-sm">Save <i class="fa fa-save"></i></a>
                                                                    <a id="playlist-cancel" class="btn btn-primary btn-sm">Cancel <i class="fa fa-times-circle-o"></i></a>
                                                                    <a id="playlist-share" class="btn btn-primary btn-sm">Share <i class="fa fa-arrow-circle-o-right"></i></a>
                                                                    <span id="playlist_process_indicator" style="display:none">processing...</span>
                                                                </div>
                                                                <script type="text/javascript">
                                                                    $(document).ready(function($) {

                                                                        $('.auto_playlist_media').autocomplete({
                                                                            source: base + 'ajax/media',
                                                                            select: function(event, ui){
                                                                                var pitem = '<li data-id=' + ui.item.id + ' >' + ui.item.value + '</li>';
                                                                                $('ol#playlist_list').prepend(pitem);
                                                                                $(this).val('');
                                                                                return false;
                                                                            }
                                                                        });

                                                                        $('#playlist-save').on('click',function(){
                                                                            var title = $('#playlist_title').val();
                                                                            var msg = $('#playlist_say').val();
                                                                            var medialist = [];
                                                                            $('ol#playlist_list li').each(function(el){
                                                                                medialist.push($(this).data('id'));
                                                                            });

                                                                            $('#playlist_process_indicator').show();
                                                                            $.post(base + 'ajax/saveplaylist',
                                                                                {
                                                                                    message:msg,
                                                                                    playlisttitle:title,
                                                                                    medialist:medialist
                                                                                },
                                                                                function(data) {
                                                                                    if(data.result == 'OK'){
                                                                                        $('#playlist-id').val(data.id);
                                                                                        alert('Playlist Saved');
                                                                                    }
                                                                                    $('#playlist_process_indicator').hide();
                                                                                    refreshTimeline();
                                                                                },
                                                                            'json');


                                                                        });

                                                                        $('#playlist-share').on('click',function(){
                                                                            var title = $('#playlist_title').val();
                                                                            var msg = $('#playlist_say').val();
                                                                            var playlistid = $('#playlist-id').val();
                                                                            var medialist = [];
                                                                            $('ol#playlist_list li').each(function(el){
                                                                                medialist.push($(this).data('id'));
                                                                            });

                                                                            $('#playlist_process_indicator').show();
                                                                            $.post(base + 'ajax/shareplaylist',
                                                                                {
                                                                                    message:msg,
                                                                                    playlisttitle:title,
                                                                                    medialist:medialist,
                                                                                    playlistid:playlistid
                                                                                },
                                                                                function(data) {
                                                                                    if(data.result == 'OK'){
                                                                                        $('#playlist-id').val(data.id);
                                                                                        alert('Playlist Saved & Shared');
                                                                                    }
                                                                                    $('#playlist_process_indicator').hide();
                                                                                    refreshTimeline();
                                                                                },
                                                                            'json');


                                                                        });


                                                                    });
                                                                </script>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- // END col -->

                                            <!-- col -->
                                            <div class="col-md-6 col-sm-12">
                                                <div class="heading-buttons innerLR border-bottom">
                                                    <h5 class="pull-left margin-none innerTB">On Radio <i class="fa fa-circle text-success fa-fw"></i></h5>
                                                    <div class="dropdown pull-right dropdown-icons dropdown-icons-xs">
                                                        <a data-toggle="dropdown" href="#" class="btn btn-default btn-stroke btn-circle dropdown-toggle"><i class="fa fa-eye"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li data-toggle="tooltip" data-title="Online" data-placement="left" data-container="body"><a href="#"><i class="fa fa-circle"></i></a></li>
                                                            <li data-toggle="tooltip" data-title="Offline" data-placement="left" data-container="body"><a href="#"><i class="fa fa-circle-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="innerAll " >
                                                    <ul class="list-unstyled friends-list">
                                                        <li><h3>Spirit of the Radio - Rush</h3></li>
                                                        <li><b>Next :</b> Carry On My Wayward Son - Kansas</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- // END col -->
                                        </div>
                                        <!-- // END box -->

                                        <div class="col-separator-h"></div>

                                        <!-- col-table-row -->
                                        <div class="col-table-row">

                                            <!-- box -->
                                            <div class="col-app box col-unscrollable overflow-hidden">

                                                <!-- col-table -->
                                                <div class="col-table">

                                                    <div class="innerLR heading-buttons border-bottom">
                                                        <h4 class="innerTB margin-none pull-left">Recent Activity</h4>
                                                        <div class="btn-group btn-group-xs pull-right">
                                                            <button id="refreshTimeline" class="btn btn-default filled"><i class="fa fa-refresh "></i></button>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <!-- col-table-row -->
                                                    <div class="col-table-row">

                                                        <!-- col-app -->
                                                        <div class="col-app col-unscrollable">

                                                            <!-- col-app -->
                                                            <div class="col-app">

                                                                @include('feed.stream',array(
                                                                    'feed'=>$feed,
                                                                    'refreshurl'=>$refreshurl,
                                                                    'lastrefresh'=>$lastrefresh
                                                                ))

                                                            </div>
                                                            <!-- // END col-app -->

                                                        </div>
                                                        <!-- // END col-app -->

                                                    </div>
                                                    <!-- // END col-table-row -->

                                                </div>
                                                <!-- // END col-table -->

                                            </div>
                                            <!-- // END col-app.box -->

                                        </div>
                                        <!-- // END col-table-row -->

                                    </div>
                                    <!-- // END col-table -->

                                </div>
                                <!-- // END col-separator -->


                            </div>
                            <!-- // END col -->



@stop