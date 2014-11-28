            <div class="wrap">
                <h2>Highlights</h2>

                <div class="scrollbar">
                    <div class="handle">
                        <div class="mousearea"></div>
                    </div>
                </div>

                <div class="frame effects" id="effects">
                    <ul class="clearfix">
                        @foreach($media as $m)
                            <li>
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
                {{--
                <div class="controls center">
                    <button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
                    <button class="btn next">next <i class="icon-chevron-right"></i></button>
                </div>
                --}}
            </div>
