@extends('layout.coralfront')

@section('content')

                    <div class="col-md-8">
                        <div class="box-generic padding-none overflow-hidden">
                            <div class="row row-merge border-bottom">
                                <div class="col-md-6">
                                    <div class="innerAll inner-2x text-center">
                                        <h5>Downloads</h5>
                                        <h4 class="text-medium text-primary text-condensed">10,201.00</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="innerAll inner-2x text-center">
                                        <h5>Revenue</h5>
                                        <h4 class="text-medium text-primary text-condensed">8,812.40</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="innerAll inner-2x bg-gray">
                                <!-- Chart with lines and fill with no points -->
                                <div id="chart_lines_fill_nopoints_2" class="flotchart-holder"></div>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="widget-head">
                                <h4 class="heading">Trends</h4>
                            </div>
                            <div class="widget-body innerAll inner-2x">
                                <table class="table table-striped margin-none">
                                    <thead>
                                        <tr>
                                            <th>Box office</th>
                                            <th class="text-center">Cash</th>
                                            <th class="text-right" style="width: 100px;">Trend</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                                                        <tr>
                                            <td><strong>1.</strong> Frozen</td>
                                            <td class="text-center">&euro;8,718,939</td>
                                            <td class="text-right">
                                                <div class="sparkline" style="width: 100px;" sparkHeight="20" sparkType="line" sparkWidth="100%" sparkLineWidth="2" sparkLineColor="#eb6a5a" sparkFillColor="" data-data="[177,356,413,475,288,231,306,243,283,284]">
                                                </div>
                                            </td>
                                        </tr>
                                                                                                                    <tr>
                                            <td><strong>2.</strong> The Hobbit 2</td>
                                            <td class="text-center">&euro;7,800,000</td>
                                            <td class="text-right">
                                                <div class="sparkline" style="width: 100px;" sparkHeight="20" sparkType="line" sparkWidth="100%" sparkLineWidth="2" sparkLineColor="#eb6a5a" sparkFillColor="" data-data="[145,497,241,182,408,140,109,321,214,117]">
                                                </div>
                                            </td>
                                        </tr>
                                                                                                                    <tr>
                                            <td><strong>3.</strong> The Wolf of Wall Street</td>
                                            <td class="text-center">&euro;5,671,036</td>
                                            <td class="text-right">
                                                <div class="sparkline" style="width: 100px;" sparkHeight="20" sparkType="line" sparkWidth="100%" sparkLineWidth="2" sparkLineColor="#eb6a5a" sparkFillColor="" data-data="[407,142,417,284,406,147,119,427,203,287]">
                                                </div>
                                            </td>
                                        </tr>
                                                                                                                    <tr>
                                            <td><strong>4.</strong> Iron Man 3</td>
                                            <td class="text-center">&euro;409,013,994</td>
                                            <td class="text-right">
                                                <div class="sparkline" style="width: 100px;" sparkHeight="20" sparkType="line" sparkWidth="100%" sparkLineWidth="2" sparkLineColor="#eb6a5a" sparkFillColor="" data-data="[158,438,452,143,354,373,229,242,197,435]">
                                                </div>
                                            </td>
                                        </tr>
                                                                                                                    <tr>
                                            <td><strong>5.</strong> Catching Fire</td>
                                            <td class="text-center">&euro;398,327,026</td>
                                            <td class="text-right">
                                                <div class="sparkline" style="width: 100px;" sparkHeight="20" sparkType="line" sparkWidth="100%" sparkLineWidth="2" sparkLineColor="#eb6a5a" sparkFillColor="" data-data="[362,257,254,165,198,304,327,366,160,438]">
                                                </div>
                                            </td>
                                        </tr>
                                                                                                                    <tr>
                                            <td><strong>6.</strong> Despicable Me 2</td>
                                            <td class="text-center">&euro;367,835,345</td>
                                            <td class="text-right">
                                                <div class="sparkline" style="width: 100px;" sparkHeight="20" sparkType="line" sparkWidth="100%" sparkLineWidth="2" sparkLineColor="#eb6a5a" sparkFillColor="" data-data="[115,390,366,315,389,214,367,144,460,409]">
                                                </div>
                                            </td>
                                        </tr>
                                                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-generic innerAll inner-2x">
                            <a href="{{ URL::to('medialib') }}" class="btn btn-info" style="width:100%;">
                                <i class="fa fa-cloud-upload"></i> Upload</a>
                                <p>Upload & manage your music, movie or create an album</p>
                        </div>
                        <div class="box-generic bg-info innerAll inner-2x">
                            <div class="text-large pull-right">&euro;1000</div>
                            <h4 class="text-white text-medium margin-none">Earnings</h4>
                            <h5 class="text-white">Today's earnings</h5>
                            <div class="separator"></div>
                            <div class="progress progress-mini bg-info-dark margin-none">
                                <div class="progress-bar bg-white" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div class="box-generic padding-none overflow-hidden">
                            <div class="row row-merge">
                                <div class="col-md-4 bg-gray">
                                    <div class="innerAll inner-2x text-center">
                                        <div class="sparkline" sparkHeight="65" data-colors="#cacaca, #4a8bc2,#609450,#cacaca">1,4,3,8</div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="innerAll">
                                        <ul class="list-unstyled">
                                            <li class="innerAll half"><i class="fa fa-fw fa-square text-info"></i> <span class="strong">5,931</span> Visits</li>
                                            <li class="innerAll half"><i class="fa fa-fw fa-square text-success"></i> <span class="strong">402</span> Conversions</li>
                                            <li class="innerAll half"><i class="fa fa-fw fa-square text-muted"></i> <span class="strong">15,120</span> Pageviews</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                                <div class="widget widget-tabs widget-tabs-double-2 border-bottom widget-tabs-responsive">

                                    <div class="widget-body">
                                        <div class="tab-content">

                                            <!-- Tab content -->
                                            <div id="tabReports" class="tab-pane active widget-body-regular innerAll inner-2x text-center">

                                                <div data-percent="85" data-size="114" class="easy-pie inline-block easy-pie-gender primary" data-scale-color="false" data-track-color="#efefef" data-line-width="8">
                                                    <div class="value text-center">
                                                        <span class="strong"><i class="icon-graph-up-1 fa-3x text-primary"></i></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- // Tab content END -->

                                            <!-- Tab content -->
                                            <div id="tabIncome" class="tab-pane widget-body-regular innerAll inner-2x text-center">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, omnis minus voluptatibus assumenda sint autem dolorum. Rem, cupiditate, sed, optio est cumque repudiandae quo natus dignissimos praesentium alias nihil aspernatur?
                                            </div>
                                            <!-- // Tab content END -->

                                            <!-- Tab content -->
                                            <div id="tabAccounts" class="tab-pane widget-body-regular innerAll inner-2x text-center">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic qui natus deserunt atque quae laborum. Porro, eveniet, voluptatem, obcaecati quisquam tempore architecto nostrum quis eius corrupti ea non facilis quidem.
                                            </div>
                                            <!-- // Tab content END -->

                                        </div>
                                    </div>

                                    <!-- Tabs Heading -->
                                    <div class="widget-head border-top-none bg-gray">
                                        <ul>
                                            <li class="active"><a class="glyphicons notes" href="#tabReports" data-toggle="tab"><i></i><span>Reports</span></a></li>
                                            <li><a class="glyphicons credit_card" href="#tabIncome" data-toggle="tab"><i></i><span>Income</span></a></li>
                                            <li><a class="glyphicons user" href="#tabAccounts" data-toggle="tab"><i></i><span>Accounts</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- // Tabs Heading END -->

                                </div>


                    </div>


@stop