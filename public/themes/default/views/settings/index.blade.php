@extends('layout.coralfront')

@section('content')

<!-- col -->
<div class="col-md-12">

    <!-- col-separator -->
    <div class="col-separator col-separator-first box">

        <!-- Tabs -->
        <div class="widget widget-tabs widget-tabs-social-account widget-tabs-responsive">
            <!-- Tabs Heading -->
            <div class="widget-head">
                <ul>
                    <li class="active"><a class="glyphicons user" href="#tabAccount" data-toggle="tab"><i></i><span>Account</span></a></li>
                    <li><a class="glyphicons credit_card" href="#tabPayments" data-toggle="tab"><i></i><span>Payment</span></a></li>
                    <li><a class="glyphicons envelope" href="#tabInbox" data-toggle="tab"><i></i><span>Inbox</span></a></li>
                    <li><a class="glyphicons lock" href="#tabPassword" data-toggle="tab"><i></i><span>Password</span></a></li>
                </ul>
            </div>
            <!-- // Tabs Heading END -->
            <div class="col-separator-h box"></div>
            <div class="widget-body">
                <div class="tab-content">

                    <!-- Tab content -->
                    <div id="tabAccount" class="tab-pane active widget-body-regular padding-none border-none reset-components">
                        <!-- Widget -->
                        <div class="widget widget-tabs border-bottom-none">

                            <!-- Widget heading -->
                            <div class="widget-head">
                                <ul>
                                    <li class="active"><a class="glyphicons edit" href="#account-details" data-toggle="tab"><i></i>Account details</a></li>
                                    <li><a class="glyphicons settings" href="#account-settings" data-toggle="tab"><i></i>Account settings</a></li>
                                </ul>
                            </div>
                            <!-- // Widget heading END -->

                            <div class="widget-body">
                                <form class="form-horizontal">
                                    <div class="tab-content">

                                        <!-- Tab content -->
                                        <div class="tab-pane active" id="account-details">

                                            <!-- Row -->
                                            <div class="row">

                                                <!-- Column -->
                                                <div class="col-md-6">

                                                    <!-- Group -->
                                                    <div class="form-group margin-none innerB">
                                                        <label class="col-md-3 control-label">First name</label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" value="John" class="form-control" />
                                                                <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="First name is mandatory"><i class="fa fa-question-circle"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Group END -->

                                                    <!-- Group -->
                                                    <div class="form-group margin-none innerB">
                                                        <label class="col-md-3 control-label">Last name</label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" value="Doe" class="form-control" />
                                                                <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Last name is mandatory"><i class="fa fa-question-circle"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Group END -->

                                                    <!-- Group -->
                                                    <div class="form-group margin-none innerB">
                                                        <label class="col-md-3 control-label">Date of birth</label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="datepicker1" class="form-control" value="13/06/1988" />
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Group END -->

                                                </div>
                                                <!-- // Column END -->

                                                <!-- Column -->
                                                <div class="col-md-6">

                                                    <!-- Group -->
                                                    <div class="form-group margin-none innerB">
                                                        <label class="col-md-3 control-label">Gender</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control selectpicker">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- // Group END -->

                                                    <!-- Group -->
                                                    <div class="form-group margin-none innerB">
                                                        <label class="col-md-3 control-label">Age</label>
                                                        <div class="col-md-9">
                                                            <input type="text" value="25" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <!-- // Group END -->

                                                </div>
                                                <!-- // Column END -->

                                            </div>
                                            <!-- // Row END -->

                                            <div class="separator line bottom"></div>

                                            <textarea id="mustHaveId" class="wysihtml5 form-control" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>

                                            <!-- Form actions -->
                                            <div class="separator top">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Save changes</button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</button>
                                            </div>
                                            <!-- // Form actions END -->

                                        </div>
                                        <!-- // Tab content END -->

                                        <!-- Tab content -->
                                        <div class="tab-pane" id="account-settings">

                                            <!-- Row -->
                                            <div class="row">

                                                <!-- Column -->
                                                <div class="col-md-3">
                                                    <strong>Change password</strong>
                                                    <p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                                <!-- // Column END -->

                                                <!-- Column -->
                                                <div class="col-md-9">
                                                    <label for="inputUsername">Username</label>
                                                    <div class="input-group">
                                                        <input type="text" id="inputUsername" class="form-control" value="john.doe2012" disabled="disabled" />
                                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Username can't be changed"><i class="fa fa-question-sign"></i></span>
                                                    </div>
                                                    <div class="separator bottom"></div>

                                                    <label for="inputPasswordOld">Old password</label>
                                                    <div class="input-group">
                                                        <input type="password" id="inputPasswordOld" class="form-control" value="" placeholder="Leave empty for no change" />
                                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Leave empty if you don't wish to change the password"><i class="fa fa-question-sign"></i></span>
                                                    </div>
                                                    <div class="separator bottom"></div>

                                                    <label for="inputPasswordNew">New password</label>
                                                    <input type="password" id="inputPasswordNew" class="form-control" value="" placeholder="Leave empty for no change" />
                                                    <div class="separator bottom"></div>

                                                    <label for="inputPasswordNew2">Repeat new password</label>
                                                    <input type="password" id="inputPasswordNew2" class="form-control" value="" placeholder="Leave empty for no change" />
                                                    <div class="separator bottom"></div>
                                                </div>
                                                <!-- // Column END -->

                                            </div>
                                            <!-- // Row END -->

                                            <div class="separator line bottom"></div>

                                            <!-- Row -->
                                            <div class="row">

                                                <!-- Column -->
                                                <div class="col-md-3">
                                                    <strong>Contact details</strong>
                                                    <p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                                <!-- // Column END -->

                                                <!-- Column -->
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="inputPhone">Phone</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                <input type="text" id="inputPhone" class="form-control" placeholder="01234567897" />
                                                            </div>
                                                            <div class="separator bottom"></div>

                                                            <label for="inputEmail">E-mail</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                <input type="text" id="inputEmail" class="form-control" placeholder="contact@mosaicpro.biz" />
                                                            </div>
                                                            <div class="separator bottom"></div>

                                                            <label for="inputWebsite">Website</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                                <input type="text" id="inputWebsite" class="form-control" placeholder="http://www.mosaicpro.biz" />
                                                            </div>
                                                            <div class="separator bottom"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputFacebook">Facebook</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                                <input type="text" id="inputFacebook" class="form-control" placeholder="mosaicpro" />
                                                            </div>
                                                            <div class="separator bottom"></div>

                                                            <label for="inputTwitter">Twitter</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                                <input type="text" id="inputTwitter" class="form-control" placeholder="mosaicpro" />
                                                            </div>
                                                            <div class="separator bottom"></div>

                                                            <label for="inputSkype">Skype ID</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                                                                <input type="text" id="inputSkype" class="form-control" placeholder="mySkypeID" />
                                                            </div>
                                                            <div class="separator bottom"></div>

                                                            <label for="inputgplus">Google</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                                                <input type="text" id="inputgplus" class="form-control" placeholder="google ID" />
                                                            </div>
                                                            <div class="separator bottom"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- // Column END -->

                                            </div>
                                            <!-- // Row END -->

                                            <!-- Form actions -->
                                            <div class="form-actions" style="margin: 0;">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Save changes</button>
                                            </div>
                                            <!-- // Form actions END -->

                                        </div>
                                        <!-- // Tab content END -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- // Widget END -->
                    </div>
                    <!-- // Tab content END -->

                    <!-- Tab content -->
                    <div id="tabPayments" class="tab-pane innerAll">
                        <h4 class="innerTB">Payment &amp; Billing Information</h4>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="box-generic bg-primary padding-none">
                                    <div class="innerAll half pull-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-times "></i></a></div>
                                    <h4 class="text-white strong margin-none innerAll pull-left"><i class="fa fa-credit-card innerR"></i> XXXX XXXX XXXX XXXX 1209</h4>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="box-generic padding-none">
                                    <div class="pull-right btn-group btn-group-sm innerAll half">
                                        <a href="#" class="btn btn-default"><i class="fa fa-check "></i> Make Primary</a>
                                        <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                    <h4 class="strong margin-none innerAll pull-left"><i class="fa fa-credit-card innerR"></i> XXXX XXXX XXXX XXXX 1209</h4>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="box-generic padding-none">
                                    <h5 class="strong innerAll border-bottom margin-none bg-gray">Add New Card</h5>
                                    <div class="innerAll inner-2x">
                                        <form action="../shop/checkout_confirmation.html?lang=en">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Card Number</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Card Number">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Expiry Date</label>
                                                        <div class="row margin-none">
                                                            <div class="col-xs-6 padding-none">
                                                                <select class="form-control selectpicker">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-6 padding-none">
                                                                <select class="form-control selectpicker">
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Security Code <i class="fa fa-question-circle"></i></label>
                                                        <input type="password" class="form-control" placeholder="CVV / CVV2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Cardholder Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name on Card">
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Make a Payment </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-generic strong">
                                    <i class="fa fa-user fa-3x pull-left text-faded"></i> Adrian Demian <br/><small class="text-faded">12 Nov 2013</small>
                                </div>
                                <div class="box-generic padding-none">
                                    <div class="innerAll border-bottom">
                                        <a href="" class="pull-right text-primary"><i class="fa fa-pencil"></i></a>
                                        <h4 class="panel-title strong">Billing Address </h4>
                                    </div>
                                    <div class="innerAll">
                                        <i class="fa fa-building pull-left fa-3x"></i> <span>129 Longford Terrace, Dublin, Ireland</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- // Tab content END -->

                    <!-- Tab content -->
                    <div id="tabInbox" class="tab-pane">
                        <div class="row margin-none email">
                            <div class="col-md-2 col-sm-12 padding-none">
                                <ul class="list-group list-group-1 margin-none borders-none">
                                    <li class="list-group-item active"><a href="#"><span class="badge pull-right badge-primary hidden-md">30</span><i class="fa fa-inbox"></i> Inbox</a></li>
                                    <li class="list-group-item"><a href="#"><span class="badge pull-right badge-primary hidden-md">2</span><i class="fa fa-book"></i> Drafts</a></li>
                                    <li class="list-group-item"><a href="#"><i class="fa fa-envelope"></i> Sent</a></li>
                                    <li class="list-group-item border-bottom-none"><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-3 padding-none">
                                <div class="widget">
                                    <div class="innerAll border-bottom">
                                        <div class="label label-default">INBOX</div> You have <strong class="text-primary">5 new</strong> emails
                                    </div>
                                    <div class="widget-body padding-none">
                                        <div class="list-group email-item-list">
                                            <a href="#" class="list-group-item active">
                                                <span class="label label-inverse pull-right">27 Oct</span>
                                                <h4>MosaicPRO <i class="fa fa-flag text-primary"></i></h4>
                                                <p class='text-regular margin-none'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</p>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <span class="label label-inverse pull-right">16 Sep</span>
                                                <h4 class="list-group-item-heading">Adrian <i class="fa fa-flag text-primary"></i></h4>
                                                <p class="text-regular margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</p>
                                            </a>
                                            <a href="#" class="list-group-item ">
                                                <span class="label label-inverse pull-right">19 Aug</span>
                                                <h4 class="list-group-item-heading">Mr.Awesome <i class="fa fa-bookmark-empty text-primary"></i> <i class="fa fa-briefcase text-regular"></i></h4>
                                                <p class="text-regular margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</p>
                                            </a>
                                            <a href="#" class="list-group-item ">
                                                <span class="label label-inverse pull-right">5 Aug</span>
                                                <h4 class="list-group-item-heading">MosaicPRO <i class="fa fa-flag text-primary"></i></h4>
                                                <p class="text-regular margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</p>
                                            </a>

                                            <a href="#" class="list-group-item ">
                                                <span class="label label-inverse pull-right">1 Jul</span>
                                                <h4 class="list-group-item-heading">Adrian</h4>
                                                <p class="text-regular margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-9">
                                <div class="action border-bottom innerAll">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-default"><i class="fa fa-reply"></i></a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-forward"></i></a>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="innerAll">
                                    <div class="email-content innerB">
                                        <div class="from">
                                            <a href="#">Adrian Demian</a> <span>(contact@mosaicpro.biz)</span>
                                            <div class="clearfix"></div>
                                            <span>To: your@email.com</span>
                                        </div>
                                        <strong>Subject Line Goes Here</strong>
                                    </div>

                                    <p>Hi Adrian,</p>
                                    <p class='text-regular'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero corporis ipsam voluptatibus suscipit eos expedita sapiente omnis voluptatum ea! Culpa, vitae eaque quis modi voluptatum quisquam ullam. Modi, tempora!</p>
                                    <p>Regards,<br/>mosaicpro </br>Director @ mosaicpro.biz</br>www.mosaicpro.biz</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Tab content END -->

                    <!-- Tab content -->
                    <div id="tabPassword" class="tab-pane innerAll">
                        <h4 class="innerTB">Change your Password</h4>
                        <form class="form-horizontal innerT " role="form">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Current Password</label>
                            <div class="col-sm-6">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Type here">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
                            <div class="col-sm-6">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Type here">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Save Changes <i class="fa fa-check"></i></button>
                            </div>
                          </div>
                        </form>
                    </div>
                    <!-- // Tab content END -->

                </div>
            </div>
        </div>
        <!-- // Tabs END -->

    </div>
    <!-- // END col-separator -->

</div>
<!-- // END col -->


@stop