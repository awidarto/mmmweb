    <li class="active">
        <i class="list-icon fa fa-cloud-upload"></i>
        <div class="block block-inline">
            <div class="caret"></div>
            <div class="box-generic">
                <div class="timeline-top-info bg-gray border-bottom media">
                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" alt="photo" class="media-object" width="35"></a>
                    <div class="media-body">
                        <a href="">{{ $f->originatorName }}</a> uploading <a href="" class="text-primary music-link" data-source="{{ $f->mediaUrl }}" data-title="{{ $f->mediaTitle }}"  data-mediaid="{{ $f->mediaId }}"
                         >{{ $f->mediaTitle }}</a>
                        <div class="timeline-bottom">
                            <i class="fa fa-clock-o"></i> {{ Carbon::createFromTimeStamp($f->timestamp->sec)->diffForHumans( Carbon::now() );}}
                        </div>
                    </div>
                </div>
                <div class="media innerAll margin-none">
                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/8.jpg" alt="photo" class="media-object" width="35"></a>
                    <div class="media-body">
                        <a href="" class="strong">Andrew</a> Good Job. Congrats and hope to see more admin templates like this in the future.
                        <div class="timeline-bottom">
                            <i class="fa fa-clock-o"></i> 2 days ago
                        </div>
                    </div>
                </div>
                <div class="media innerAll margin-none bg-gray border-top border-bottom">
                    <a class="pull-left" href="#"><img src="{{ URL::to('coral')}}/assets/images/people/80/2.jpg" alt="photo" width="35" class="media-object"></a>
                    <div class="media-body">
                        <a href="" class="strong">mosaicpro</a> Thanks, I  apreciate it!
                        <div class="timeline-bottom">
                            <i class="fa fa-clock-o"></i> 5 days ago
                        </div>
                    </div>
                </div>
                <div class="innerAll">
                    <div class="input-group">
                        <input class="form-control" placeholder="Comment here..."/>
                        <div class="input-group-addon">
                            <a href="#"><i class="fa fa-share-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </li>
