        <div class="wrap">
            <h3>{{ $title }}</h3>

            <div class="scrollbar">
                <div class="handle">
                    <div class="mousearea"></div>
                </div>
            </div>

            <div class="frame" id="basic">
                <ul class="clearfix">
                    @foreach($media as $m)
                        <li style="width:160px">
                            <div class="widget widget-heading-simple widget-body-white widget-pinterest">
                                <div class="widget-body padding-none">
                                    <a data-source="{{ $m->defaultmedia['fileurl'] }}" data-title="{{ $m->title }}" data-mediaid="{{ $m->_id }}" data-mediatype="{{ $m->mediatype }}" data-poster="{{ $m->defaultpic['medium_url'] }}" class="thumb music-link" >
                                        <img src="{{ $m->defaultpic['medium_url']}}" alt="photo" />
                                    </a>
                                    <div class="description col-md-12">
                                        <h5 class="text-uppercase">{{ $m->title }}</h5>
                                        <p>{{ $m->artist}}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <ul class="pages"></ul>
            {{--
            <div class="controls center">
                <button class="btn prevPage"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i> page</button>
                <button class="btn prev"><i class="icon-chevron-left"></i> item</button>
                <button class="btn backward"><i class="icon-chevron-left"></i> move</button>

                <div class="btn-group">
                    <button class="btn toStart">toStart</button>
                    <button class="btn toCenter">toCenter</button>
                    <button class="btn toEnd">toEnd</button>
                </div>

                <div class="btn-group">
                    <button class="btn toStart" data-item="10"><strong>10</strong> toStart</button>
                    <button class="btn toCenter" data-item="10"><strong>10</strong> toCenter</button>
                    <button class="btn toEnd" data-item="10"><strong>10</strong> toEnd</button>
                </div>

                <div class="btn-group">
                    <button class="btn add"><i class="icon-plus-sign"></i></button>
                    <button class="btn remove"><i class="icon-minus-sign"></i></button>
                </div>

                <button class="btn forward">move <i class="icon-chevron-right"></i></button>
                <button class="btn next">item <i class="icon-chevron-right"></i></button>
                <button class="btn nextPage">page <i class="icon-chevron-right"></i><i class="icon-chevron-right"></i></button>
            </div>
            --}}
        </div>