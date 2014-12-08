<!-- Widget -->
<div class="widget widget-tabs border-bottom-none">

    <?php
        Former::populate($user);
    ?>

    <div class="widget-body">
        {{ Former::open_vertical() }}
            <div class="tab-content">

                <!-- Tab content -->
                <div class="tab-pane active" id="account-details">

                    <!-- Row -->
                    <div class="row">

                        <!-- Column -->
                        <div class="col-md-6">
                            {{ Former::text('firstname','First Name')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="First name is mandatory"><i class="fa fa-question-circle"></i></div>')}}
                            {{ Former::text('lastname','Last Name')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Last name is mandatory"><i class="fa fa-question-circle"></i></div>')}}
                            {{ Former::text('email','Email')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Email is mandatory"><i class="fa fa-envelope"></i></div>')}}
                            {{ Former::text('mobile','Mobile')
                                ->append('<div class="add-on"><i class="fa fa-phone"></i></div>')}}
                        </div>
                        <!-- // Column END -->

                        <!-- Column -->
                        <div class="col-md-6">
                            {{ Former::text('address','Address 1')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Street address line 1"><i class="fa fa-question-circle"></i></div>')}}
                            {{ Former::text('address2','Address 2')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Street address line 2 ( optional )"><i class="fa fa-question-circle"></i></div>')}}
                            {{ Former::text('city','City')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="City"><i class="fa fa-question-circle"></i></div>')}}
                            {{ Former::text('ZIP','ZIP')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Zip Code"><i class="fa fa-question-circle"></i></div>')}}
                        </div>
                        <!-- // Column END -->

                    </div>
                    <!-- // Row END -->


                    <!-- Form actions -->
                    <div class="separator top">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Save changes</button>
                        <a type="button" href="{{ URL::to('mymumomu') }}" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</a>
                    </div>
                    <!-- // Form actions END -->

                </div>
                <!-- // Tab content END -->
                {{--
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
                        <a type="button" href="{{ URL::to('settings') }}" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</a>
                    </div>
                    <!-- // Form actions END -->

                </div>
                <!-- // Tab content END -->

                --}}
            </div>
        </form>
    </div>
</div>
<!-- // Widget END -->
