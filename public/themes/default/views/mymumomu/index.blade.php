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
                                    <button  id="refreshTimeline"  class="btn btn-default filled"><i class="fa fa-refresh "></i></button>
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
        </div>

    </div>

    <!-- col -->
    <!-- avatar col -->
    <div class="col-md-7">
                <!-- col-separator -->
        <div class="col-separator border-none" style="background-color:transparent !important;">
            <div class="box-generic bg-info innerAll inner-2x">
                <div class="text-large pull-right">{{ Ks::getAvailableCredit() }}</div>
                <h4 class="text-white text-medium margin-none">Wallet</h4>
                <h5 class="text-white">Current points</h5>
                <div class="separator"></div>
                <a href="{{ URL::to('buy/point')}}" class="btn btn-primary">Buy points</a>
            </div>
        </div>

            @include('partials.gallery',array('media'=>$media))

        </div>

    </div>


@stop