'<div class="media innerAll margin-none">' +
'    <a class="pull-left" href="#"><img src="' + c.avatar + '" alt="photo" class="media-object" width="35"></a>' +
'    <div class="media-body">'+
'        <a href="" class="strong">' + c.commenter + '</a> ' + c.comment +
'        <div class="timeline-bottom">' +
'            <i class="fa fa-clock-o"></i> ' + moment(c.commenttime).fromNow() +
'        </div>' +
'    </div>' +
'</div>'