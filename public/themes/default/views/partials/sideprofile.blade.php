                                    <section class="panel no-border overflow-hidden widget-social">
                                        <div class="panel-body bg-white">
                                            <a href="#" class="pull-left mg-r-md">
                                                <img src="{{ URL::to('cameo')}}/img/avatar.jpg" class="avatar avatar-md img-circle" alt="">
                                            </a>
                                            <div>{{ Auth::user()->firstname.' '.Auth::user()->lastname}}
                                            </div>
                                            <small>{{ Auth::user()->email }}</small>
                                            <br>
                                            <small>Interactive UX Developer</small>
                                        </div>
                                        <div class="panel-footer no-padding no-border">
                                            <div class="row no-margin">
                                                <div class="col-xs-4 bg-primary pd-md text-center">
                                                    <a href="#">
                                                        <span class="fa fa-heart mg-b-xs show"></span>
                                                        782
                                                    </a>
                                                </div>
                                                <div class="col-xs-4 bg-warning pd-md text-center">
                                                    <a href="#">
                                                        <span class="fa fa-user mg-b-xs show"></span>
                                                        8,234
                                                    </a>
                                                </div>
                                                <div class="col-xs-4 bg-info pd-md text-center">
                                                    <a href="#">
                                                        <span class="fa fa-plus mg-b-xs show"></span>
                                                        290,847
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
