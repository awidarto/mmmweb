@extends('layout.coralfront')

@section('content')
    <!-- avatar col -->
    <div class="col-md-2 col-sm-4">
        <!-- col-separator.box -->
        <div class="col-separator box col-separator-first reset-components">
            <div class="bg-white">
                <div class="profile-avatar">
                    <div class="text-center">
                        <img src="{{ URL::to('coral')}}/assets/images/people/775/avatar.jpg" class="img-responsive img-clean" />
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
                <li class="list-group-item border-top-none active"><a href="index.html?lang=en"><span class="badge pull-right badge-primary hidden-md">13</span><i class="fa fa-book"></i> Timeline</a></li>
                <li class="list-group-item"><a href="social_account.html?lang=en"><i class="fa fa-user"></i> My Account</a></li>
                <li class="list-group-item"><a href="social_messages.html?lang=en"><span class="badge pull-right badge-primary hidden-md">2</span><i class="fa fa-envelope"></i> Messages</a></li>
                <li class="list-group-item"><a href="social_friends.html?lang=en"><i class="fa fa-group"></i> Friends</a></li>
                <li class="list-group-item border-bottom-none"><a href="login.html?lang=en"><i class="fa fa-lock"></i> Logout</a></li>
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
                                                            <button class="btn btn-default filled"><i class="fa fa-refresh "></i></button>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <!-- col-table-row -->
                                                    <div class="col-table-row">

                                                        <!-- col-app -->
                                                        <div class="col-app col-unscrollable">

                                                            <!-- col-app -->
                                                            <div class="col-app">
                                                                <ul class="timeline-activity list-unstyled">
                                                                    <li class="active">
                                                                        <i class="list-icon fa fa-music"></i>
                                                                        <div class="block block-inline">
                                                                            <div class="caret"></div>
                                                                            <div class="box-generic">
                                                                                <div class="timeline-top-info bg-gray border-bottom media">
                                                                                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" alt="photo" class="media-object" width="35"></a>
                                                                                    <div class="media-body">
                                                                                        <a href="">Oddiegetah</a> was listening to <a href="" class="text-primary">Keong Racun</a><br />
                                                                                        <audio preload="auto">
                                                                                            <source src="http://localhost/mmmweb/public/storage/media/TgeoTpc9ukSusUb/Kansas_-_Romantic_Collection-_More_Gold_[CD2]_-_09._Dust_In_The_Wind.mp3">
                                                                                        </audio>
                                                                                        <div class="timeline-bottom">
                                                                                            <i class="fa fa-clock-o"></i> 2 days ago
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media innerAll margin-none">
                                                                                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/8.jpg" alt="photo" class="media-object" width="35"></a>
                                                                                    <div class="media-body">
                                                                                        <a href="" class="strong">Andrew</a> Good Job. Congrats and hope to see more admin templates like this in the future.
                                                                                        <div class="timeline-bottom">
                                                                                            <i class="fa fa-clock-o"></i> 2 days ago
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media innerAll margin-none bg-gray border-top border-bottom">
                                                                                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" alt="photo" width="35" class="media-object"></a>
                                                                                    <div class="media-body">
                                                                                        <a href="" class="strong">mosaicpro</a> Thanks, I  apreciate it!
                                                                                        <div class="timeline-bottom">
                                                                                            <i class="fa fa-clock-o"></i> 5 days ago
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="innerAll">
                                                                                    <div class="input-group">
                                                                                        <input class="form-control" placeholder="Comment here..."/>
                                                                                        <div class="input-group-addon">
                                                                                            <a href="#"><i class="fa fa-share-square"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </li>

                                                                    <li class="active">
                                                                        <i class="list-icon fa fa-music"></i>
                                                                        <div class="block block-inline">
                                                                            <div class="caret"></div>
                                                                            <div class="box-generic">
                                                                                <div class="timeline-top-info bg-gray border-bottom media">
                                                                                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" alt="photo" class="media-object" width="35"></a>
                                                                                    <div class="media-body">
                                                                                        <a href="">Oddiegetah</a> is listening to this playlist <a href="" class="text-primary">Dangdut Progressive</a><br />
                                                                                        <audio>
                                                                                        </audio>
                                                                                        <ol>
                                                                                            <li>
                                                                                                <a href="#" data-src="http://localhost/mmmweb/public/storage/media/TgeoTpc9ukSusUb/Kansas_-_Romantic_Collection-_More_Gold_[CD2]_-_09._Dust_In_The_Wind.mp3">Dust In The Wind - Kansas</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" data-src="http://localhost/mmmweb/public/storage/media/TgeoTpc9ukSusUb/Kansas_-_Romantic_Collection-_More_Gold_[CD2]_-_09._Dust_In_The_Wind.mp3">Dust In The Wind - Kansas</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" data-src="http://localhost/mmmweb/public/storage/media/TgeoTpc9ukSusUb/Kansas_-_Romantic_Collection-_More_Gold_[CD2]_-_09._Dust_In_The_Wind.mp3">Dust In The Wind - Kansas</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" data-src="http://localhost/mmmweb/public/storage/media/TgeoTpc9ukSusUb/Kansas_-_Romantic_Collection-_More_Gold_[CD2]_-_09._Dust_In_The_Wind.mp3">Dust In The Wind - Kansas</a>
                                                                                            </li>
                                                                                        </ol>
                                                                                        <div class="timeline-bottom">
                                                                                            <i class="fa fa-clock-o"></i> 2 days ago
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media innerAll margin-none">
                                                                                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/8.jpg" alt="photo" class="media-object" width="35"></a>
                                                                                    <div class="media-body">
                                                                                        <a href="" class="strong">Andrew</a> Good Job. Congrats and hope to see more admin templates like this in the future.
                                                                                        <div class="timeline-bottom">
                                                                                            <i class="fa fa-clock-o"></i> 2 days ago
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media innerAll margin-none bg-gray border-top border-bottom">
                                                                                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" alt="photo" width="35" class="media-object"></a>
                                                                                    <div class="media-body">
                                                                                        <a href="" class="strong">mosaicpro</a> Thanks, I  apreciate it!
                                                                                        <div class="timeline-bottom">
                                                                                            <i class="fa fa-clock-o"></i> 5 days ago
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="innerAll">
                                                                                    <div class="input-group">
                                                                                        <input class="form-control" placeholder="Comment here..."/>
                                                                                        <div class="input-group-addon">
                                                                                            <a href="#"><i class="fa fa-share-square"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <i class="list-icon fa fa-list"></i>
                                                                        <div class="block block-inline">
                                                                            <div class="caret"></div>
                                                                            <div class="box-generic">
                                                                                <div class="timeline-top-info">
                                                                                    <i class="fa fa-user"></i>
                                                                                    <a href="">mosaicpro</a> visited
                                                                                    <a href="" class="text-primary"><i class="text-primary fa fa-location-arrow"></i> Dracula's Castle</a>
                                                                                </div>
                                                                                <div class="media margin-none">
                                                                                    <div class="row innerLR innerB">
                                                                                        <div class="col-sm-4 col-lg-3">
                                                                                            <div class="innerT">
                                                                                                <div class="icon-block text-center ">
                                                                                                    <span class="glyphicons tower"><i></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-8 col-lg-9">
                                                                                            <div class="innerT">
                                                                                                <h5 class="strong">Bran Castle</h5>
                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, aspernatur ut fuga eum cumque delectus voluptate impedit quaerat sapiente officiis fugit voluptates sit neque quibusdam beatae est modi repudiandae unde.</p>
                                                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 3.5
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="timeline-bottom innerT half">
                                                                                <i class="fa fa-clock-o"></i> 2 days ago  <span class="innerL"><i class="fa fa-calendar fa-fw"></i> 25 Oct 2013</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <i class="list-icon fa fa-comments"></i>
                                                                        <div class="block block-inline">
                                                                            <div class="caret"></div>
                                                                            <div class="box-generic">
                                                                                <div class="timeline-top-info">
                                                                                    <i class="fa fa-user"></i> <a href="">mosaicpro</a> wrote a <a href="" class="text-primary">comment</a> to <a href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" width="20" /></a> <a href="">Jane S.</a>
                                                                                    <div class="timeline-bottom">
                                                                                        <i class="fa fa-clock-o"></i> 6 days ago
                                                                                    </div>
                                                                                </div>
                                                                                <div class="bg-gray innerAll border-top">Good Job. Congrats and hope to see you soon.</div>
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <i class="list-icon fa fa-user"></i>
                                                                        <div class="block">
                                                                            <div class="caret"></div>
                                                                                <div class="inline-block box-generic">
                                                                                    <div class="timeline-top-info bg-gray border-bottom">
                                                                                        <i class="fa fa-user"></i> <a href="">Oddiegetah</a> is following <a href="#"><img  src="{{ URL::to('coral')}}/assets/images/people/80/1.jpg" width="20"/></a> <a href="">Jane S.</a>
                                                                                    </div>
                                                                                    <div class="media innerAll margin-none">
                                                                                        <a class="pull-left" href="#">
                                                                                          <img src="{{ URL::to('coral')}}/assets/images/people/80/1.jpg" alt="photo" class="media-object" width="35">
                                                                                        </a>
                                                                                        <div class="media-body">
                                                                                          <a href="" class="strong">Jane Smith</a>
                                                                                          <a href="" class="clearfix text-primary strong">www.domain.com</a>
                                                                                        <div class="media-icons">
                                                                                                <a href=""><i class="fa fa-clock-o"></i></a>
                                                                                                <a href=""><i class="fa fa-calendar"></i></a>
                                                                                                <a href=""><i class="fa fa-user"></i></a>
                                                                                                <a href=""><i class="fa fa-star"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                  </div>
                                                                                </div>

                                                                                <div class="inline-block box-generic">
                                                                                    <div class="timeline-top-info bg-gray border-bottom">
                                                                                        <i class="fa fa-user"></i> <a href="">mosaicpro</a> is following <a href="#"><img  src="{{ URL::to('coral')}}/assets/images/people/80/1.jpg" width="20"/></a> <a href="">Jane S.</a>
                                                                                    </div>

                                                                                    <div class="media innerAll margin-none ">
                                                                                        <a class="pull-left" href="#">
                                                                                          <img src="{{ URL::to('coral')}}/assets/images/people/80/1.jpg" alt="photo" class="media-object" width="35">
                                                                                        </a>
                                                                                        <div class="media-body">
                                                                                          <a href="" class="strong">Jane Smith</a>
                                                                                          <a href="" class="clearfix text-primary strong">www.domain.com</a>
                                                                                        <div class="media-icons">
                                                                                                <a href=""><i class="fa fa-clock-o"></i></a>
                                                                                                <a href=""><i class="fa fa-calendar"></i></a>
                                                                                                <a href=""><i class="fa fa-user"></i></a>
                                                                                                <a href=""><i class="fa fa-star"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                  </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>


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

    <!-- col -->
    <div class="col-sm-12 col-md-3 col-lg-2">
        @include('partials.friends')
    </div>
    <!-- // END col -->


@stop