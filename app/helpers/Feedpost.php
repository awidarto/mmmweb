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

    public static function likes($uid, $itemid){
        $c = Like::where('uid',$uid)->where('itemid',$itemid)->count();
        if($c > 0){
            return true;
        }else{
            return false;
        }
    }

    public static function putComment($uid, $itemid, $comment){
        $createdDate = new MongoDate();
        $lastUpdate = new MongoDate();

        $commentId = Comment::insertGetId(array(
                'uid'=>$uid,
                'itemid'=>$itemid,
                'comment'=>$comment,
                'createdDate'=>$createdDate,
                'lastUpdate'=>$lastUpdate
            ));
        return Comment::find($commentId)->toArray();
    }

    public static function getComments($itemid){
        return Comment::where('itemid',$itemid)->get();
    }

    public static function getLikeCount($itemid){
        $c = Like::where('itemid',$itemid)->count();
        return $c;
    }
}