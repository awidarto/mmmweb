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
}