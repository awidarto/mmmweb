    <li class="active">
        <i class="list-icon fa fa-music"></i>
        <div class="block block-inline">
            <div class="caret"></div>
            <div class="box-generic">
                <div class="timeline-top-info bg-gray border-bottom media">
                    <a class="pull-left" href="#"><img src="{{ Feedpost::getAvatar($f->originatorId)}}" alt="photo" class="media-object" width="35"></a>
                    <div class="media-body pull-left">
                        <a href="">{{ $f->originatorName }}</a> listens to <span class="text-primary music-link" data-source="{{ ( $f->mediaType == 'album')?'':$f->mediaUrl }} }}" data-title="{{ $f->mediaTitle }}" data-mediaid="{{ $f->mediaId }}" data-mediatype="{{ $f->mediaType }}" data-poster="{{ $f->coverUrl }}"
                         >{{ $f->mediaTitle }}</span>
                         @if($f->message != '')
                            <p>{{ $f->message }}</p>
                         @endif
                        <div class="timeline-bottom">
                            <i class="fa fa-clock-o"></i> {{ Carbon::createFromTimeStamp($f->timestamp->sec)->diffForHumans();}}
                        </div>
                        <div class="like">
                            <?php
                                if(Feedpost::likes(Auth::user()->_id, $f->id)){
                                    $cls = 'fa-heart';
                                }else{
                                    $cls = 'fa-heart-o';
                                }

                                $md = Ks::getMedia($f->mediaId);

                            ?>
                            <i class="fa {{$cls}} like-toggle" data-id="{{ $f->_id }}" ></i> <span class="like-count"><span id="like_{{ $f->_id }}" >{{ Feedpost::getLikeCount($f->id) }}</span> likes</span>

                            <a class="buy-button" href="{{ URL::to('buy/media/'.$f->mediaId)}}">
                                <i class="fa fa-shopping-cart"></i>
                            </a> <span class="like-count"> {{ $md['price'] }}</span>
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
