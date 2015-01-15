<?php

class Feedpost{
    public function __construct(){

    }

    public static function add($type,$mediaid,$data = null)
    {
        $event = new Feed();
        $event->timestamp = new MongoDate();
        $event->utime = time();
        $event->type = $type;
        $event->mediaId = $mediaid;
        $event->originatorId = Auth::user()->_id;

        if(!is_null($data)){
            foreach ($data as $key => $value) {
                $event->{$key} = $value;
            }
        }

        $event->save();
    }

    public static function getAvatar($uid){
        $m = Member::find($uid);
        return $m->avatar;
    }

    public static function getUserName($uid){
        $m = Member::find($uid);
        return $m->fullname;
    }

    public static function like($mode,$uid, $itemid, $type = 'feed'){
        if($mode == 'inc'){
            $mediaid = '';
            if($type == 'feed'){
                $feed = Feed::find($itemid);
                $mediaid = $feed->mediaId;
            }
            Like::insert( array('uid'=>$uid, 'itemid'=>$itemid, 'itemType'=>$type, 'mediaId'=>$mediaid ) );
        }else{
            Like::where('uid',$uid)->where('itemid',$itemid)->delete();
        }
    }

    public static function likes($uid, $itemid){
        $c = Like::where('uid',$uid)->where('itemid',$itemid)->count();
        if($c == 0){
            return false;
        }else{
            return true;
        }
    }

    public static function putComment($uid, $itemid, $comment, $type = 'feed'){
        $createdDate = new MongoDate();
        $lastUpdate = new MongoDate();

        $mediaid = '';
        if($type == 'feed'){
            $feed = Feed::find($itemid);
            $mediaid = $feed->mediaId;
        }

        $commentId = Comment::insertGetId(array(
                'uid'=>$uid,
                'itemid'=>$itemid,
                'mediaId'=>$mediaid,
                'itemType'=>$type,
                'comment'=>$comment,
                'createdDate'=>$createdDate,
                'lastUpdate'=>$lastUpdate
            ));
        return Comment::find($commentId)->toArray();
    }

    public static function getComments($itemid){
        return Comment::where('itemid',$itemid)->orderBy('createdDate','desc')->get();
    }

    public static function getLikeCount($itemid){
        $c = Like::where('itemid',$itemid)->count();
        return $c;
    }
}