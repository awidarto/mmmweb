    <li class="active">
        <i class="list-icon fa fa-cloud-upload"></i>
        <div class="block block-inline">
            <div class="caret"></div>
            <div class="box-generic">
                <div class="timeline-top-info bg-gray border-bottom media">
                    <a class="pull-left" href="#"><img src="{{ Feedpost::getAvatar($f->originatorId)}}" alt="photo" class="media-object" width="35"></a>
                    <div class="media-body">
                        <a href="">{{ $f->originatorName }}</a> uploading <a href="" class="text-primary music-link" data-source="{{ ( $f->mediaType == 'album')?'':$f->mediaUrl }}" data-title="{{ $f->mediaTitle }}"  data-mediaid="{{ $f->mediaId }}" data-mediaid="{{ $f->mediaId }}" data-mediatype="{{ $f->mediaType }}" data-poster="{{ $f->coverUrl }}"
                         >{{ $f->mediaTitle }}</a>
                        <div class="timeline-bottom">
                            <i class="fa fa-clock-o"></i> {{ Carbon::createFromTimeStamp($f->timestamp->sec)->diffForHumans();}}
                        </div>
                    </div>
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
                        <input class="form-control" id="comment_{{ $f->_id }}" placeholder="Comment here..."/>
                        <div class="input-group-addon comment-submit" data-id="{{ $f->_id }}">
                            <i class="fa fa-share-square comment-submit" data-id="{{ $f->_id }}"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </li>
