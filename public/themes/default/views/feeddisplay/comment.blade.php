<div class="media innerAll margin-none">
    <a class="pull-left" href="#"><img src="{{ Feedpost::getAvatar($c->uid) }}" alt="photo" class="media-object" width="35"></a>
    <div class="media-body">
        <a href="" class="strong">{{ Feedpost::getUserName($c->uid) }}</a> {{ $c->comment }}
        <div class="timeline-bottom">
            <i class="fa fa-clock-o"></i> {{ Carbon::createFromTimeStamp($c->createdDate->sec)->diffForHumans();}}
        </div>
    </div>
</div>
