<div class="play-trigger" data-toggle="gridalicious" data-gridalicious-width="160" data-gridalicious-gutter="25">
    <div class="innerAll inner-2x loading text-center text-medium">
        <i class="fa fa-fw fa-spinner fa-spin"></i> Loading
    </div>
        <div class="loaded play-trigger">
            @foreach($media as $m)
                <div class="widget widget-heading-simple widget-body-white widget-pinterest">
                    <div class="widget-body padding-none">
                        <a href="" data-source="{{ $m->defaultmedia['fileurl'] }}" data-title="{{ $m->title }}" data-mediaid="{{ $m->_id }}" class="thumb music-link" >
                            <img src="{{ $m->defaultpic['medium_url']}}" alt="photo" />
                        </a>
                        <div class="description col-md-12">
                            <h5 class="text-uppercase">{{ $m->title }}</h5>
                            <p>{{ $m->artist}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
