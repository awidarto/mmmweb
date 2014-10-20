@extends('layout.front')

@section('content')


<!-- User Profile Header -->
<!-- For an image header add the class 'content-header-media' and an image as in the following example -->
<div class="content-header content-header-media">
    <div class="header-section">
        <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="pull-right img-circle">
        <h1>John Doe <br><small>Life Explorer &amp; Traveller</small></h1>
    </div>
    <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
    <img src="img/placeholders/headers/profile_header.jpg" alt="header image" class="animation-pulseSlow">
</div>
<!-- END User Profile Header -->

<!-- User Profile Content -->
<div class="row">
    <!-- First Column -->
    <div class="col-md-6 col-lg-7">
        <!-- Updates Block -->
        <div class="block">
            <!-- Updates Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Privacy Settings"><i class="fa fa-cog"></i></a>
                </div>
                <h2><strong>Share</strong> something..</h2>
            </div>
            <!-- END Updates Title -->

            <!-- Update Status Form -->
            <form action="page_ready_user_profile.html" method="post" class="block-content-full block-content-mini-padding" onsubmit="return false;">
                <textarea id="default-textarea" name="default-textarea" rows="2" class="form-control push-bit" placeholder="What are you thinking?"></textarea>
                <div class="clearfix">
                    <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-pencil"></i> Post</button>
                    <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Voice"><i class="fa fa-microphone"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add File"><i class="fa fa-file"></i></a>
                </div>
            </form>
            <!-- END Update Status Form -->
        </div>
        <!-- END Updates Block -->

        <!-- Timeline Style Block -->
        <div class="block full">
            <!-- Timeline Style Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                </div>
                <h2><strong>My Timeline</strong></h2>
            </div>
            <!-- END Timeline Style Title -->

            <!-- Timeline Style Content -->
            <!-- You can remove the class .block-content-full if you want the block to have its regular padding -->
            <div class="timeline block-content-full">
                <h3 class="timeline-header">Web Conference <small><strong>June 14, 2014</strong></small></h3>
                <!-- You can remove the class .timeline-hover if you don't want each event to be highlighted on mouse hover -->
                <ul class="timeline-list timeline-hover">
                    <li>
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-time">8:00 <strong>am</strong></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>Breakfast</strong></p>
                            <p class="push-bit">An awesome breakfast will wait for you at the lobby!</p>
                            <div class="row push">
                                <div class="col-sm-6 col-md-4">
                                    <a href="img/placeholders/photos/photo6.jpg" data-toggle="lightbox-image">
                                        <img src="img/placeholders/photos/photo6.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a href="img/placeholders/photos/photo7.jpg" data-toggle="lightbox-image">
                                        <img src="img/placeholders/photos/photo7.jpg" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                        <div class="timeline-time">9:15 <strong>am</strong></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>Web Design Session</strong></p>
                            A1 Conference Room
                        </div>
                    </li>
                    <li>
                        <div class="timeline-icon"><i class="fa fa-coffee"></i></div>
                        <div class="timeline-time">10:30 <strong>am</strong></div>
                        <div class="timeline-content">
                            <strong>Coffee Break</strong>
                        </div>
                    </li>
                    <li class="active">
                        <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                        <div class="timeline-time">11:00 <strong>pm</strong></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>Web Development Session</strong></p>
                            B6 Conference Room
                        </div>
                    </li>
                    <li>
                        <div class="timeline-icon"><i class="fa fa-cutlery"></i></div>
                        <div class="timeline-time">1:30 <strong>pm</strong></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>Lunch</strong></p>
                            <p class="push-bit">Awesome food prepared by our awesome chefs!</p>
                            <div class="row push">
                                <div class="col-sm-6 col-md-4">
                                    <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                        <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-icon"><i class="gi gi-beach_umbrella"></i></div>
                        <div class="timeline-time">3:00 <strong>pm</strong></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>Break</strong></p>
                            Relax time after lunch
                        </div>
                    </li>
                    <li class="active">
                        <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                        <div class="timeline-time">5:00 <strong>pm</strong></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>Web Standards Session</strong></p>
                            C1 Conference Room
                        </div>
                    </li>
                    <li>
                        <div class="timeline-icon"><i class="gi gi-drink"></i></div>
                        <div class="timeline-time">10:00 <strong>pm</strong></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>Happy Hour</strong></p>
                            <p class="push-bit">Free drinks at <a href="javascript:void(0)">Cafe-Bar</a>!</p>
                            <div id="gmap-timeline" class="gmap"></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                        <div class="timeline-content">
                            <p class="push-bit"><strong>End of first day</strong></p>
                            <p class="push-bit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.</p>
                            <p>Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque!</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END Timeline Style Content -->
        </div>
        <!-- END Timeline Style Block -->
    </div>
    <!-- END First Column -->

    <!-- Second Column -->
    <div class="col-md-6 col-lg-5">
        <!-- Info Block -->
        <div class="block">
            <!-- Info Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Hire"><i class="fa fa-briefcase"></i></a>
                </div>
                <h2>About <strong>John Doe</strong> <small>&bull; <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="Download Bio in PDF">Bio</a></small></h2>
            </div>
            <!-- END Info Title -->

            <!-- Info Content -->
            <table class="table table-borderless table-striped">
                <tbody>
                    <tr>
                        <td style="width: 20%;"><strong>Info</strong></td>
                        <td>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non.</td>
                    </tr>
                    <tr>
                        <td><strong>Founder</strong></td>
                        <td><a href="javascript:void(0)">Company Inc</a></td>
                    </tr>
                    <tr>
                        <td><strong>Education</strong></td>
                        <td><a href="javascript:void(0)">University Name</a></td>
                    </tr>
                    <tr>
                        <td><strong>Projects</strong></td>
                        <td><a href="javascript:void(0)" class="label label-danger">168</a></td>
                    </tr>

                </tbody>
            </table>
            <!-- END Info Content -->
        </div>
        <!-- END Info Block -->

        <!-- Friends Block -->
        <div class="block">
            <!-- Friends Title -->
            <div class="block-title">
                <h2><strong>Friends</strong> <small>&bull; <a href="javascript:void(0)">450</a></small></h2>
            </div>
            <!-- END Friends Title -->

            <!-- Friends Content -->
            <div class="row text-center">
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar11.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar1.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar1.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar13.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar5.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar11.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar14.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar3.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar2.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar4.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar12.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar15.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                    </a>
                </div>
            </div>
            <!-- END Friends Content -->
        </div>
        <!-- END Friends Block -->

    </div>
    <!-- END Second Column -->
</div>
<!-- END User Profile Content -->


@stop