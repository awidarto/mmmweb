    <script type="text/javascript">
        $(document).ready(function() {
            var radioPlayer;

            var stream = {
                title: "ABC Jazz",
                mp3: "http://listen.radionomy.com/abc-jazz"
            },
            ready = false;

            radioPlayer = $("#radio_player").jPlayer({
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

<div class="row">
    <div class="col-md-6">

        <div id="radio_player" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
            <div class="jp-type-single">
                <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                        <button class="jp-play" role="button" tabindex="0">play</button>
                        <button class="jp-stop" role="button" tabindex="0">stop</button>
                    </div>
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>
                    <div class="jp-volume-controls">
                        <button class="jp-mute" role="button" tabindex="0">mute</button>
                        <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                    </div>
                    <div class="jp-radio-control">
                        <button class="jp-radio" role="button" tabindex="0">radio</button>
                    </div>
                    <div class="jp-time-holder">
                        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                        <div class="jp-toggles">
                            <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                        </div>
                    </div>
                </div>
                <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>            <!--  Copyright Line -->
    </div>
    <div class="col-md-6">
        <div class="jp-details">
            <div class="jp-title" aria-label="title"><h4>&nbsp;</h4></div>
        </div>
    </div>
</div>
