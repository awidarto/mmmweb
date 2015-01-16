    <li class="active">
        <i class="list-icon fa fa-music"></i>
        <div class="block block-inline">
            <div class="caret"></div>
            <div class="box-generic">
                <div class="timeline-top-info bg-gray border-bottom media">
                    <a class="pull-left" href="#"><img src="{{ Feedpost::getAvatar($f->originatorId)}}" alt="photo" class="media-object" width="35"></a>
                    <div class="media-body pull-left">
                        <a href="">{{ $f->originatorName }}</a> creates a playlist <span class="text-primary music-link" data-source="{{ ( $f->mediaType == 'album')?'':$f->mediaUrl }} }}" data-title="{{ $f->mediaTitle }}" data-mediaid="{{ $f->mediaId }}" data-mediatype="{{ $f->mediaType }}" data-poster="{{ $f->coverUrl }}"
                         >{{ $f->mediaTitle }}</span>
                         @if($f->message != '')
                            <p>{{ $f->message }}</p>
                         @endif
                        <div class="timeline-bottom">
                            <i class="fa fa-clock-o"></i> {{ Carbon::createFromTimeStamp($f->timestamp->sec)->diffForHumans();}}
                        </div>
                        <ol class="playlist">
                            <?php
                                //print_r($f)
                                $medialist = Ks::medialist($f->media);
                                $playlist_price = 0;
                            ?>
                            @foreach($medialist as $m)
                                <?php
                                    $playlist_price += (double)$m->price;
                                ?>
                                <li>
                                    <img src="{{ $m->defaultpic['thumbnail_url'] }}" /> {{ $m->title }}
                                        <a class="buy-button" href="{{ URL::to('buy/media/'.$m->_id)}}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a> <span class="like-count"> {{ $m->price }}</span>
                                </li>
                            @endforeach
                        </ol>
                        <div class="like">
                            <?php
                                if(Feedpost::likes(Auth::user()->_id, $f->id)){
                                    $cls = 'fa-heart';
                                }else{
                                    $cls = 'fa-heart-o';
                                }
                            ?>
                            <i class="fa {{$cls}} like-toggle" data-id="{{ $f->_id }}" ></i> <span class="like-count"><span id="like_{{ $f->_id }}" >{{ Feedpost::getLikeCount($f->id) }}</span> likes</span>
                        </div>
                        <div class="buy">
                            <a class="buy-button" href="{{ URL::to('buy/playlist/'.$f->_id)}}">
                                <i class="fa fa-shopping-cart"></i>
                            </a> <span class="like-count"> {{ $playlist_price }}</span>
                        </div>
                    </div>
                    @if($f->coverUrl != '')
                    <div class="pull-right" style="width:95px;">
                         <img class="pull-right" src="{{$f->coverUrl}}" alt="" style="width:90px;height:auto;"/>
                    </div>
                    @endif
                </div>
                <div class="comment {{ $f->mediaId }}" id="commentlist_{{ $f->_id }}">
                    <?php
                        $comments = Feedpost::getComments($f->_id);
                    ?>
                    @foreach( $comments as $c)
                        @include('feeddisplay.comment',array('c'=>$c))
                    @endforeach
                </div>
                <div class="innerAll">
                    <div class="input-group">
                        <input class="form-control" id="comment_{{ $f->_id }}" placeholder=""/>
                        <div class="input-group-addon comment-submit" data-id="{{ $f->_id }}">
                            <i class="fa fa-share comment-submit" data-id="{{ $f->_id }}"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </li>
