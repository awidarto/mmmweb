    <script type="text/javascript">
        $(document).ready(function() {
            var radioPlayer;

            var myPlaylist = new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_N",
                cssSelectorAncestor: "#jp_container_N"
            }, [], {
                playlistOptions: {
                    enableRemoveControls: true,
                    autoPlay:true
                },
                swfPath: "../../js/jplayer",
                supplied: "webmv, ogv, m4v, oga, mp3",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                audioFullScreen: true
            });

            $('.jp-jplayer').hide();
            $('.jp-playlist').hide();


/*
            var stream = {
                title: "ABC Jazz",
                mp3: "http://listen.radionomy.com/abc-jazz"
            },
            ready = false;

            radioPlayer = $("#jquery_jplayer_N").jPlayer({
                ready: function (event) {
                    ready = true;
                    $(this).jPlayer("setMedia", stream);
                    $('.jp-title h4').html("MuMoMu Radio");

                },
                pause: function() {
                    $(this).jPlayer("clearMedia");
                },
                error: function(event) {
                    if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
                        // Setup the media stream again and play it.
                        $(this).jPlayer("setMedia", stream).jPlayer("play");
                    }
                },
                swfPath: "{{ URL::to('jplayer') }}/js/jplayer",
                supplied: "mp3",
                preload: "none",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                keyEnabled: true
            });
*/

            $('.play-trigger').on('click',function(e){
                var ev = e.target;
                addToPlaylist(ev);
            });


            $('.jp-toggle-playlist').on('click',function(){
                $('.jp-playlist').toggle();
            });

            $('.jp-toggle-video').on('click',function(){
                $('.jp-jplayer').toggle();

            });


            function addToPlaylist(e){
                if ($(e).is('.music-link')) {
                    console.log($(e).data('source'));
                    var source = $(e).data('source');
                    var title = $(e).data('title');
                    var artist = $(e).data('title');
                    var mediatype = $(e).data('mediatype');
                    var poster = $(e).data('poster');

                    if( mediatype == 'movie'){
                        var mediaobj = {
                            'title': title,
                            'artist': artist,
                            'poster': poster,
                            'm4v': source
                        };

                    }else{
                        var mediaobj = {
                            'title': title,
                            'artist': artist,
                            'poster': poster,
                            'mp3': source
                        };
                    }

                    $('.jp-jplayer').show();
                    $('.jp-playlist').show();

                    myPlaylist.setPlaylist([mediaobj]);
                    myPlaylist.play();

                    $('.jp-title h4').html($(e).data('title'));

                    listento($(e).data('mediaid'));

                }
                return false;
            }

            /*
            $('.music-link').on('click',function(e){
                console.log($(this).data('source'));
                var source = $(this).data('source');

                radioPlayer.jPlayer('setMedia',{
                    'mp3': source
                });

                $('.jp-title h4').html($(this).data('title'));

                radioPlayer.jPlayer('play');

                listento($(this).data('mediaid'));
                return false;
            });
            */

            function listento(id){
                console.log(id);

                var url = '{{ URL::to('ajax/listen') }}';
                $.post(
                    url,
                    {
                        mediatype: 'music',
                        mediaid: id
                    },
                    function(d){
                        console.log(d);
                    },'json'
                );
            }

        });
    </script>

    <style type="text/css">
        .jp-video-270p {
            width:800px;
        }

        .jp-jplayer{
            display: table-column;
            width:480px;
            float: left;
        }

        .jp-gui{
        }

        .jp-playlist{
            width:315px;
            float: right;
            max-height: 270px;
            overflow-y:auto;
        }

        .jp-jplayer img{
            border: none;
        }
    </style>

<div id="jp_container_N" class="jp-video jp-video-270p" role="application" aria-label="media player">
    <div class="jp-type-playlist">
        <div id="jquery_jplayer_N" class="jp-jplayer" style="background-color: #ffff;"></div>
        <div class="jp-playlist">
            <ul>
                <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                <li>&nbsp;</li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="jp-gui">
            <div class="jp-interface">
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                <div class="jp-controls-holder">
                    <div class="jp-controls">
                        <button class="jp-previous" role="button" tabindex="0">previous</button>
                        <button class="jp-play" role="button" tabindex="0">play</button>
                        <button class="jp-next" role="button" tabindex="0">next</button>
                        <button class="jp-stop" role="button" tabindex="0">stop</button>
                    </div>
                    <div class="jp-volume-controls">
                        <button class="jp-mute" role="button" tabindex="0">mute</button>
                        <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                    </div>
                    <div class="jp-toggles">
                        <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                        <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                        <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
                        <button class="jp-toggle-video" role="button" tabindex="0"><i class="fa fa-youtube-play"></i></button>
                        <button class="jp-toggle-playlist" role="button" tabindex="0"><i class="fa fa-list"></i></button>
                    </div>
                </div>
                <div class="jp-details">
                    <div class="jp-title" aria-label="title">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="jp-no-solution">
            <span>Update Required</span>
            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
    </div>
</div>
