<div class="audio-player">
    <div class="audio-title">
        <h6 class="no-margin">{{ $title }}</h6>
        <small>{{ $artist }}</small>
    </div>
    <audio preload="auto" controls>
        <source src="{{ $source }}">
    </audio>
</div>
