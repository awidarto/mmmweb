@extends('layout.coralfront')

@section('content')
    <!-- col -->
    <div class="col-md-4">
        <!-- col-separator -->
        <div class="col-separator border-none">

            <!-- col-table -->
            <div class="col-table">
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
        </div>

    </div>

    <!-- col -->
    <!-- avatar col -->
    <div class="col-md-4">
                <!-- col-separator -->
        <div class="col-separator border-none" style="background-color:transparent !important;">
            <div class="box-generic bg-info innerAll inner-2x">
                <div class="text-large pull-right">&euro;1000</div>
                <h4 class="text-white text-medium margin-none">Wallet</h4>
                <h5 class="text-white">Current points</h5>
                <div class="separator"></div>
                <a href="{{ URL::to('topup')}}" class="btn btn-primary">Buy points</a>
            </div>
            <div class="box-generic padding-none overflow-hidden">
                <div class="heading-buttons innerR half border-bottom bg-primary">
                    <div class="btn-group btn-group-sm pull-right">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Day <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Day</a></li>
                            <li><a href="#">Week</a></li>
                            <li><a href="#">Month</a></li>
                        </ul>
                    </div>
                    <h4 class="innerAll margin-none pull-left text-white"><i class="fa fa-fw fa-money"></i> Earnings</h4>
                    <div class="clearfix"></div>
                </div>
                <div class="innerAll border-bottom">
                    <p class="margin-none"><span class="strong">Today: </span> &euro;502.42 <i class="fa text-primary fa-fw fa-arrow-up"></i><span class="strong text-primary">4%</span></p>
                </div>
                <div class="innerAll inner-2x bg-gray">
                    <div class="sparkline" sparkType="line" sparkResize="true" sparkHeight="76" sparkLineWidth="2" sparkWidth="100%" sparkLineColor="#eb6a5a" sparkSpotColor="#eb6a5a" sparkFillColor="" sparkHighlightLineColor="#7c7c7c" sparkHighlightSpotColor="#7c7c7c" sparkSpotRadius="4" sparkMinSpotColor="#b55151" sparkMaxSpotColor="#609450">
                        290,155,223,325,418,149,398,457,211,478                             </div>
                </div>
            </div>
            <div class="box-generic padding-none overflow-hidden">
                <div class="heading-buttons innerR half border-bottom">
                    <div class="btn-group btn-group-sm pull-right">
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Monthly <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="">Monthly</a></li>
                            <li><a href="">Quarterly</a></li>
                            <li><a href="">Yearly</a></li>
                        </ul>
                    </div>
                    <h4 class="innerAll margin-none pull-left">Monthly Spend</h4>
                    <div class="clearfix"></div>
                </div>
                <div class="innerAll inner-2x bg-gray border-bottom">
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, ipsam, minus nam consequatur aliquid sint.</p>
                </div>
                <div class="innerAll inner-2x">
                    <p class="text-large">&euro;3,204.89</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% from last month</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="strong margin-none">&euro;5,127.82</p>
                        <p><em>Previus month bill</em></p>
                    </div>
                </div>
            </div>

        </div>

        </div>
    <!-- // END avatar col -->

    <div class="col-md-3">
                <!-- col-separator -->
        @include('partials.friends')
    </div>
    <!-- // END col -->


@stop