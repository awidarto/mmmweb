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
                    <li><a class="glyphicons credit_card" href="#tabPhoto" data-toggle="tab"><i></i><span>Photo</span></a></li>
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
                                    <li class="active"><a class="glyphicons edit" href="#account-details" data-toggle="tab"><i></i>Account Details</a></li>
                                    <li><a class="glyphicons settings" href="#account-settings" data-toggle="tab"><i></i>Contact Details</a></li>
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
                    <div id="tabPhoto" class="tab-pane innerAll">
                        <!-- Widget -->
                        <div class="widget widget-tabs border-bottom-none">

                            <!-- Widget heading -->
                            <div class="widget-head">
                                <ul>
                                    <li class="active"><a class="glyphicons edit" href="#photo-upload" data-toggle="tab"><i></i>Upload Photo</a></li>
                                    <li><a class="glyphicons settings" href="#photo-cam" data-toggle="tab"><i></i>Take a Snapshot</a></li>
                                </ul>
                            </div>
                            <!-- // Widget heading END -->

                            <div class="widget-body">
                                <form class="form-horizontal">
                                    <div class="tab-content">

                                        <!-- Tab content -->
                                        <div class="tab-pane active" id="photo-upload">

                                            <!-- Row -->
                                            <div class="row">

                                                <!-- Column -->
                                                <div class="col-md-6">

                                                    @include('photo.upload')

                                                </div>
                                                <!-- // Column END -->

                                                <!-- Column -->
                                                <div class="col-md-6">

                                                    @include('photo.cam')

                                                </div>
                                                <!-- // Column END -->

                                            </div>
                                            <!-- // Row END -->

                                            <div class="separator line bottom"></div>


                                            <!-- Form actions -->
                                            <div class="separator top">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Save changes</button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</button>
                                            </div>
                                            <!-- // Form actions END -->

                                        </div>
                                        <!-- // Tab content END -->

                                        <!-- Tab content -->
                                        <div class="tab-pane" id="photo-cam">

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