<!-- Specific Theme Color Widget with Extra Content 2 -->
<div class="widget">
    <div class="widget-simple themed-background-dark-fire">
        <a href="javascript:void(0)" class="widget-icon pull-right themed-background-fire">
            <i class="fa fa-music animation-pulse"></i>
        </a>
        <h4 class="widget-content widget-content-light">
            <a href="javascript:void(0)" class="themed-color-fire">{{ isset($m['title'])?$m['title']:'Untitled' }}</a>
            <small>{{ isset($m['artist'])?$m['artist']:'n/a' }}</small>
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
    <div class="widget-extra" style="padding-top:8px;">
        {{ $m['thumbnail']}}
    </div>
</div>
<!-- END Specific Theme Color Widget with Extra Content 2 -->
