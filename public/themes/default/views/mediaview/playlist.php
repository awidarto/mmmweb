        <section class="panel no-border bg-success">
            <div class="panel-heading no-border">
                <small class="pull-right text-white">
                    <a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="#"></a>
                    <a class="fa fa-refresh panel-refresh pd-r-xs" href="#"></a>
                    <a class="fa fa-times panel-remove" href="#"></a>
                </small>
                <h5 class="text-white pd"><b class="fa fa-list"></b> Dangdut Progressive 1
                </h5>
            </div>
            <div class="panel-body bg-white">
                <a href="#" class="pull-left mg-r-md">
                    <img src="{{ URL::to('cameo')}}/img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
                </a>
                <div>{{ Auth::user()->fullname }}
                    <small class="pull-right">12 mins ago</small>
                </div>
                <small>San Francisco, CA</small>
                <p class="mg-t-sm">
                    The whole of science is nothing more than a refinement of everyday thinking.
                </p>
                <div class="text-muted">
                    <a href="#" class="muted mg-r-md">
                        <i class="fa fa-comment-o  mg-r-xs"></i>3523
                    </a>
                    <a href="#" class="text-white">
                        <i class="fa fa-heart text-danger mg-r-xs"></i>12K
                    </a>
                </div>
                <div class="clearfix mg-t-md">
                    <img src="{{ URL::to('cameo')}}/img/face3.jpg" class="avatar avatar-sm img-circle pull-left mg-r-md" alt="">

                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Write a comment">
                        <span class="input-group-addon">
                            <i class="fa fa-comments"></i>
                        </span>
                    </div>

                </div>
            </div>
        </section>
