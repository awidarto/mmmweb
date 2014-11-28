        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend>Member Info</legend>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Username</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static">Admin</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                            <div class="col-md-8">
                                                <label class="switch switch-primary">
                                                    <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Password Update</legend>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                            <div class="col-md-8">
                                                <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                            <div class="col-md-8">
                                                <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend>Profile Picture</legend>
                                    <?php
                                        $fupload = new Fupload();
                                    ?>
                                    <div style="width:100%" >

                                        {{ $fupload->id('avatarupload')->title('Select Image')->label('Upload Avatar')
                                            ->url('upload/avatar')
                                            ->singlefile(true)
                                            ->prefix('cover')->multi(false)->make() }}

                                    </div>

                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->
