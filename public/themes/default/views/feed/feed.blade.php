@extends('layout.front')

@section('content')

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

        <!-- Newsfeed Block -->
        <div class="block">
            <!-- Newsfeed Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="label label-danger animation-pulse">Live Feed</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Customize Feed"><i class="fa fa-pencil"></i></a>
                </div>
                <h2><strong>Newsfeed</strong></h2>
            </div>
            <!-- END Newsfeed Title -->

            <!-- Newsfeed Content -->
            <div class="block-content-full">
                <!-- You can remove the class .media-feed-hover if you don't want each event to be highlighted on mouse hover -->
                <ul class="media-list media-feed media-feed-hover">
                    <!-- Photos Uploaded -->
                    <!-- Example effect of the following update showing up in Newsfeed (initialized in js/pages/readyProfile.js) -->
                    <li id="newsfeed-update-example" class="media display-none">
                        <a href="page_ready_user_profile.html" class="pull-left">
                            <img src="img/placeholders/avatars/avatar8.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right">
                                    <small>just now</small>
                                    <span class="text-success" data-toggle="tooltip" title="From Mobile"><i class="fa fa-mobile"></i></span>
                                </span>
                                <strong><a href="page_ready_user_profile.html">User</a> shared a playlist.</strong>
                            </p>
                            <div class="row push">
                                <div class="col-sm-6 col-md-4">
                                    <a href="img/placeholders/photos/photo13.jpg" data-toggle="lightbox-image">
                                        <img src="img/placeholders/photos/photo13.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                        <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                            </p>
                        </div>
                    </li>
                    <!-- END Photos Uploaded -->

                    <!-- Photos Uploaded -->
                    <!-- Example effect of the following update showing up in Newsfeed (initialized in js/pages/readyProfile.js) -->
                    <li id="newsfeed-update-example" class="media display-none">
                        <a href="page_ready_user_profile.html" class="pull-left">
                            <img src="img/placeholders/avatars/avatar8.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right">
                                    <small>just now</small>
                                    <span class="text-success" data-toggle="tooltip" title="From Mobile"><i class="fa fa-mobile"></i></span>
                                </span>
                                <strong><a href="page_ready_user_profile.html">User</a> shared a playlist.</strong>
                            </p>
                            <div class="row push">
                                <div class="col-sm-6 col-md-4">
                                    <a href="img/placeholders/photos/photo13.jpg" data-toggle="lightbox-image">
                                        <img src="img/placeholders/photos/photo13.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                        <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                            </p>
                        </div>
                    </li>
                    <!-- END Photos Uploaded -->

                    <!-- Story Published -->
                    <li class="media">
                        <a href="page_ready_user_profile.html" class="pull-left">
                            <img src="img/placeholders/avatars/avatar8.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right">
                                    <small>45 min now</small>
                                    <span class="text-danger" data-toggle="tooltip" title="From Web"><i class="fa fa-globe"></i></span>
                                </span>
                                <strong><a href="page_ready_user_profile.html">Explorer</a> published a new story.</strong>
                            </p>
                                <!-- Advanced Active Theme Color Widget -->
                                <div class="widget">
                                    <div class="widget-advanced">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-center themed-background-dark">
                                            <div class="widget-options-left">
                                                <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></button>
                                            </div>
                                            <div class="widget-options">
                                                <div class="btn-group btn-group-xs">
                                                    <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Add album to cart"><i class="fa fa-shopping-cart"></i></button>
                                                    <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Favorite"><i class="fa fa-heart text-danger"></i></button>
                                                </div>
                                            </div>
                                            <h3 class="widget-content-light">
                                                <a href="javascript:void(0)" class="themed-color">Best Songs of 2013</a><br>
                                                <small>Various Artists, 20 Songs</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <a href="javascript:void(0)" class="widget-image-container animation-bigEntrance">
                                                <span class="widget-icon themed-background"><i class="gi gi-albums"></i></span>
                                            </a>
                                            <table class="table table-borderless table-striped table-condensed table-vcenter">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 10px;">01</td>
                                                        <td><strong>Song Title</strong></td>
                                                        <td class="text-right">3:15</td>
                                                        <td class="text-center" style="width: 70px;">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Preview"><i class="fa fa-play"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td><strong>Song Title</strong></td>
                                                        <td class="text-right">3:45</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Preview"><i class="fa fa-play"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td><strong>Song Title</strong></td>
                                                        <td class="text-right">2:59</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Preview"><i class="fa fa-play"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td><strong>Song Title</strong></td>
                                                        <td class="text-right">3:10</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Preview"><i class="fa fa-play"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td><strong>Song Title</strong></td>
                                                        <td class="text-right">3:28</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Preview"><i class="fa fa-play"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-center"><a href="javascript:void(0)">Show all..</a></div>
                                        </div>
                                        <!-- END Widget Main -->
                                    </div>
                                </div>
                                <!-- END Advanced Active Theme Color Widget -->
                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-thumbs-up"></i> You Like it</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                            </p>

                            <!-- Comments -->
                            <ul class="media-list push">
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar16.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                        <span class="text-muted"><small><em>29 min ago</em></small></span>
                                        <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                        <span class="text-muted"><small><em>18 min ago</em></small></span>
                                        <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <form action="page_ready_user_profile.html" method="post" onsubmit="return false;">
                                            <textarea id="profile-newsfeed-comment1" name="profile-newsfeed-comment1" class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                            <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Post Comment</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <!-- END Comments -->
                        </div>
                    </li>
                    <!-- END Story Published -->

                    <!-- Story Published -->
                    <li class="media">
                        <a href="page_ready_user_profile.html" class="pull-left">
                            <img src="img/placeholders/avatars/avatar8.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right">
                                    <small>45 min now</small>
                                    <span class="text-danger" data-toggle="tooltip" title="From Web"><i class="fa fa-globe"></i></span>
                                </span>
                                <strong><a href="page_ready_user_profile.html">Explorer</a> published a new story.</strong>
                            </p>
                                <!-- Advanced Active Theme Color Widget -->
                                <div class="widget">
                                    <div class="widget-advanced">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-center themed-background-dark">
                                            <div class="widget-options-left">
                                                <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></button>
                                            </div>
                                            <div class="widget-options">
                                                <div class="btn-group btn-group-xs">
                                                    <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Add album to cart"><i class="fa fa-shopping-cart"></i></button>
                                                    <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Favorite"><i class="fa fa-heart text-danger"></i></button>
                                                </div>
                                            </div>
                                            <h3 class="widget-content-light">
                                                <a href="javascript:void(0)" class="themed-color">Best Songs of 2013</a><br>
                                                <small>Various Artists, 20 Songs</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Specific Theme Color Widget with Extra Content 2 -->
                                        <div class="widget">
                                            <div class="widget-simple themed-background-dark-fire">
                                                <a href="javascript:void(0)" class="widget-icon pull-right themed-background-fire">
                                                    <i class="fa fa-music animation-pulse"></i>
                                                </a>
                                                <h4 class="widget-content widget-content-light">
                                                    <a href="javascript:void(0)" class="themed-color-fire">Awesome <strong>Song</strong></a>
                                                    <small>Ultimate Album</small>
                                                </h4>
                                            </div>
                                            <div class="widget-extra themed-background-fire">
                                                <div class="row text-center">
                                                    <div class="col-xs-6">
                                                        <h3 class="widget-content-light">
                                                            <i class="fa fa-heart"></i><br>
                                                            <small>503 Likes</small>
                                                        </h3>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h3 class="widget-content-light">
                                                            <i class="fa fa-headphones"></i><br>
                                                            <small>Played x790</small>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-extra">
                                            <table class="table table-borderless table-striped table-condensed table-vcenter">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 10px;">01</td>
                                                        <td><strong>Song Title</strong></td>
                                                        <td class="text-right">3:15</td>
                                                        <td class="text-center" style="width: 70px;">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Preview"><i class="fa fa-play"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                                <h4 class="sub-header">Artist</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst.</p>
                                            </div>
                                        </div>
                                        <!-- END Specific Theme Color Widget with Extra Content 2 -->
                                    </div>
                                </div>
                                <!-- END Advanced Active Theme Color Widget -->
                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-thumbs-up"></i> You Like it</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                            </p>

                            <!-- Comments -->
                            <ul class="media-list push">
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar16.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                        <span class="text-muted"><small><em>29 min ago</em></small></span>
                                        <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                        <span class="text-muted"><small><em>18 min ago</em></small></span>
                                        <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <form action="page_ready_user_profile.html" method="post" onsubmit="return false;">
                                            <textarea id="profile-newsfeed-comment1" name="profile-newsfeed-comment1" class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                            <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Post Comment</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <!-- END Comments -->
                        </div>
                    </li>
                    <!-- END Story Published -->

                    <!-- Check in -->
                    <li class="media">
                        <a href="page_ready_user_profile.html" class="pull-left">
                            <img src="img/placeholders/avatars/avatar8.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right">
                                    <small>1 hour ago</small>
                                    <span class="text-success" data-toggle="tooltip" title="From Mobile"><i class="fa fa-mobile"></i></span>
                                </span>
                                <strong><a href="page_ready_user_profile.html">Adventurer</a> checked in at <a href="javascript:void(0)">Cafe-Bar</a>.</strong>
                            </p>
                            <div id="gmap-checkin" class="gmap push"></div>
                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                            </p>
                        </div>
                    </li>
                    <!-- END Check in -->

                    <!-- Status Updated -->
                    <li class="media">
                        <a href="page_ready_user_profile.html" class="pull-left">
                            <img src="img/placeholders/avatars/avatar7.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right">
                                    <small>5 hours ago</small>
                                    <span class="text-info" data-toggle="tooltip" title="From Custom App"><i class="fa fa-wrench"></i></span>
                                </span>
                                <strong><a href="page_ready_user_profile.html">User</a> updated status.</strong>
                            </p>
                                                            <!-- Specific Theme Color Widget with Extra Content 2 -->
                                <div class="widget">
                                    <div class="widget-simple themed-background-dark-fire">
                                        <a href="javascript:void(0)" class="widget-icon pull-right themed-background-fire">
                                            <i class="fa fa-music animation-pulse"></i>
                                        </a>
                                        <h4 class="widget-content widget-content-light">
                                            <a href="javascript:void(0)" class="themed-color-fire">Awesome <strong>Song</strong></a>
                                            <small>Ultimate Album</small>
                                        </h4>
                                    </div>
                                    <div class="widget-extra themed-background-fire">
                                        <div class="row text-center">
                                            <div class="col-xs-6">
                                                <h3 class="widget-content-light">
                                                    <i class="fa fa-heart"></i><br>
                                                    <small>503 Likes</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6">
                                                <h3 class="widget-content-light">
                                                    <i class="fa fa-headphones"></i><br>
                                                    <small>Played x790</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-extra">
                                        <h4 class="sub-header">Artist</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst.</p>
                                    </div>
                                </div>
                                <!-- END Specific Theme Color Widget with Extra Content 2 -->

                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                            </p>
                            <!-- Comments -->
                            <ul class="media-list push">
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar5.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                        <span class="text-muted"><small><em>1 hour ago</em></small></span>
                                        <p>Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="page_ready_user_profile.html" class="pull-left">
                                        <img src="img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <form action="page_ready_user_profile.html" method="post" onsubmit="return false;">
                                            <textarea id="profile-newsfeed-comment" name="profile-newsfeed-comment" class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                            <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Post Comment</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <!-- END Comments -->
                        </div>
                    </li>
                    <li class="media text-center">
                        <a href="javascript:void(0)" class="btn btn-xs btn-default push">View more..</a>
                    </li>
                    <!-- END Status Updated -->
                </ul>
            </div>
            <!-- END Newsfeed Content -->
        </div>
        <!-- END Newsfeed Block -->
    </div>
    <!-- END First Column -->

    <!-- Second Column -->
    <div class="col-md-6 col-lg-5">

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