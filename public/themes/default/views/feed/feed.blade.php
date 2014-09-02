@extends('layout.front')

@section('content')


    <div id="do-what">
        <section class="panel no-border overflow-hidden widget-social">
            <div class="panel-body bg-white">
                <div class="clearfix mg-t-md">
                    <img src="{{ URL::to('cameo')}}/img/face3.jpg" class="avatar avatar-sm img-circle pull-left mg-r-md" alt="">

                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Share something">
                        <span class="input-group-addon">
                            <i class="fa fa-comment-o"></i>
                        </span>
                    </div>
                    <div class="input-group" id="upload-media" style="display:none">
                        <form id="up-media">
                            <input type="hidden" value="" name="mediatype" id="media-type" >
                            <div id="uploader">
                                <?php
                                    $fupload = new Fupload();
                                ?>

                                {{ $fupload->id('mediaupload')->title('Select Media')->label('Upload Media')->make() }}
                            </div>
                        </form>
                        <div class="clearfix">
                            <button class="btn btn-primary pull-right" id="do-upload" ><b class="fa fa-share"></b> Share</button>
                            <button class="btn btn-danger pull-right" id="cancel-share"><b class="fa fa-times-circle-o"></b> Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="panel-footer no-padding no-border">
                <div class="row no-margin">
                    <div class="col-xs-4 bg-primary pd-md text-center">
                        <a href="#" id="up-music">
                            <span class="fa fa-cloud-upload mg-b-xs show"></span>
                            Music
                        </a>
                    </div>
                    <div class="col-xs-4 bg-warning pd-md text-center">
                        <a href="#" id="up-movie">
                            <span class="fa fa-cloud-upload mg-b-xs show"></span>
                            Movie
                        </a>
                    </div>
                    <div class="col-xs-4 bg-info pd-md text-center">
                        <a href="#" id="up-playlist">
                            <span class="fa fa-cloud-upload mg-b-xs show"></span>
                            Playlist
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="feed">

        <!-- shared playlist -->
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

        <!-- shared music -->

        <section class="panel no-border bg-success">
            <div class="panel-heading no-border">
                <small class="pull-right text-white">
                    <a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="#"></a>
                    <a class="fa fa-refresh panel-refresh pd-r-xs" href="#"></a>
                    <a class="fa fa-times panel-remove" href="#"></a>
                </small>
                <h5 class="text-white pd"><b class="fa fa-music"></b> fast Car - Tracy Chapman
                </h5>
            </div>

            <div class="panel-body no-padding">
                <div class="audio-player">
                    <div class="audio-title">
                        <h6 class="no-margin">The paper kites - Bloom</h6>
                        <small>Woodland (2011)</small>
                    </div>
                    <audio preload="auto" controls>
                        <source src="{{ URL::to('cameo')}}/data/adg3com_bustedchump.mp3">
                            <source src="http://upload.wikimedia.org/wikipedia/commons/c/c8/Example.ogg">
                                <source src="http://www.nch.com.au/acm/11k16bitpcm.wav">
                    </audio>
                </div>
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

        <!-- shared movie -->
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
                    <video class="video-js" controls preload="auto" width="640" height="264" poster="img/trailer.png" data-setup="{}">
                        <source src="{{ URL::to('cameo')}}/video/bigbuckbunny.mp4" type="{{ URL::to('cameo')}}/video/mp4">
                            <source src="{{ URL::to('cameo')}}/video/bigbuckbunny.webm" type="video/webm">
                                <track kind="captions" src="data/captions.vtt" srclang="en" label="English">
                                    <!-- Tracks need an ending tag thanks to IE9 -->
                                    <track kind="subtitles" src="data/captions.vtt" srclang="en" label="English">
                                        <!-- Tracks need an ending tag thanks to IE9 -->
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

    </div><!-- end feed -->

        <script type="text/javascript">
            $(document).ready(function(){
                $('#up-music').on('click',function(){
                    $('#upload-media').show();
                    $('#media-type').val('music');
                    $('#mediaupload_uploadedform ul').html('');
                    $('#mediaupload_files ul').html('');
                });

                $('#up-movie').on('click',function(){
                    $('#upload-media').show();
                    $('#media-type').val('movie');
                    $('#mediaupload_uploadedform ul').html('');
                    $('#mediaupload_files ul').html('');
                });

                $('#cancel-share').on('click',function(){
                    $('#upload-media').hide();
                });

                $('#do-upload').on('click',function(){
                    //console.log($('#up-media').serializeArray());
                    var formdata = $('#up-media').serializeArray();
                    $.post('{{ URL::to('ajax/share') }}',
                        formdata,
                        function(d){
                            if(d.result == 'OK'){
                                $('#upload-media').hide();
                            }else{
                                alert('failed to upload media');
                            }

                        },'json');

                });


            });
        </script>

@stop