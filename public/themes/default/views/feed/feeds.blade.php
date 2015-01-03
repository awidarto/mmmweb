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
            color: white;
        }

        .comment-submit{
            cursor: pointer;
        }

        .like-toggle{
            font-size: 18px;
            cursor: pointer;
        }

        .timeline-activity li .timeline-top-info i.like-toggle{
            color: red;
            vertical-align: top;
        }

        .like{
            margin-top: 8px;
        }

        .like-count{
            font-size: 11px;
            vertical-align: baseline;
            margin-left: 6px;
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
                                                                    <textarea class="form-control" rows="2" placeholder="Im' listening to..."></textarea>

                                                                    <a class="btn btn-primary btn-sm">Share <i class="fa fa-arrow-circle-o-right"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane innerAll text-center" id="playlistTab">
                                                                <div class="share">
                                                                    <textarea class="form-control" rows="2" placeholder="Search title, artists or album"></textarea>

                                                                    <a class="btn btn-primary btn-sm">Save <i class="fa fa-save"></i></a>
                                                                    <a class="btn btn-primary btn-sm">Share <i class="fa fa-arrow-circle-o-right"></i></a>
                                                                </div>
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