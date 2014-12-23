    <li class="active">
        <i class="list-icon fa fa-music"></i>
        <div class="block block-inline">
            <div class="caret"></div>
            <div class="box-generic">
                <div class="timeline-top-info bg-gray border-bottom media">
                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" alt="photo" class="media-object" width="35"></a>
                    <div class="media-body">
                        <a href="">{{ $f->originatorName }}</a> listens to <span class="text-primary music-link" data-source="{{ ( $f->mediaType == 'album')?'':$f->mediaUrl }} }}" data-title="{{ $f->mediaTitle }}" data-mediaid="{{ $f->mediaId }}" data-mediatype="{{ $f->mediaType }}" data-poster="{{ $f->coverUrl }}"
                         >{{ $f->mediaTitle }}</span>
                        <div class="timeline-bottom">
                            <i class="fa fa-clock-o"></i> {{ Carbon::createFromTimeStamp($f->timestamp->sec)->diffForHumans( Carbon::now() );}}
                        </div>
                    </div>
                </div>
                <div class="comment {{ $f->mediaId }}" id="commentlist_{{ $f->_id }}">
                    <div class="media innerAll margin-none">
                        <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/8.jpg" alt="photo" class="media-object" width="35"></a>
                        <div class="media-body">
                            <a href="" class="strong">Andrew</a> Good Job. Congrats and hope to see more admin templates like this in the future.
                            <div class="timeline-bottom">
                                <i class="fa fa-clock-o"></i> 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="innerAll">
                    <div class="input-group">
                        <input class="form-control" id="comment_{{ $f->_id }}" placeholder="Comment here..."/>
                        <div class="input-group-addon comment-submit" data-id="{{ $f->_id }}">
                            <i class="fa fa-share-square comment-submit" data-id="{{ $f->_id }}"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </li>
