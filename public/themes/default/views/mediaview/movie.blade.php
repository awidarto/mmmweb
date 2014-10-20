        <section class="panel no-border">
            <div class="panel-heading no-border">
                <a href="#" class="pull-left mg-r-md">
                    <img src="{{ URL::to('cameo')}}/img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
                </a>
                <div>Gary Stone
                    <small class="pull-right">
                        <a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="#"></a>
                        <a class="fa fa-refresh panel-refresh pd-r-xs" href="#"></a>
                        <a class="fa fa-times panel-remove" href="#"></a>
                    </small>
                </div>
                <small>shared a movie with Matt Stone.</small>
            </div>
            <div class="panel-body no-padding">
                    <video class="video-js" controls preload="auto" width="640" height="264" data-setup="{}">
                        <source src="{{ URL::to('cameo')}}/video/bigbuckbunny.mp4" type="{{ URL::to('cameo')}}/video/mp4">
                            <source src="{{ URL::to('cameo')}}/video/bigbuckbunny.webm" type="video/webm">
                    </video>
                <div class="pd-md">
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
            </div>
        </section>
