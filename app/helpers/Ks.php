<?php

class Ks {

    public static function normalphone($number){
        $numbers = explode('/',$number);
        if(is_array($numbers)){
            $nums = array();
            foreach($numbers as $number){

                $number = str_replace(array('-',' ','(',')','[',']','{','}'), '', $number);

                if(preg_match('/^\+/', $number)){
                    if( preg_match('/^\+62/', $number)){
                        $number = preg_replace('/^\+62|^620/', '62', $number);
                    }else{
                        $number = preg_replace('/^\+/', '', $number);
                    }
                }else if(preg_match('/^62/', $number)){
                    $number = preg_replace('/^620/', '62', $number);
                }else if(preg_match('/^0/', $number)){
                    $number = preg_replace('/^0/', '62', $number);
                }

                $nums[] = $number;
            }
            $number = implode('/',$nums);
        }else{

            $number = str_replace(array('-',' ','(',')'), '', $number);

            if(preg_match('/^\+/', $number)){
                if( preg_match('/^\+62/', $number)){
                    $number = preg_replace('/^\+62|^620/', '62', $number);
                }else{
                    $number = preg_replace('/^\+/', '', $number);
                }
            }else if(preg_match('/^62/', $number)){
                $number = preg_replace('/^620/', '62', $number);
            }else if(preg_match('/^0/', $number)){
                $number = preg_replace('/^0/', '62', $number);
            }
        }

        return $number;
    }

    public static function idr($in){
        return number_format((double) $in,2,',','.');
    }

    public static function usd($in){
        return number_format((double) $in,0,'.',',');
    }

    public static function roi($prop){
        $roi = ((12*$prop['monthlyRental']) - $prop['tax'] - $prop['insurance'] - ( (12*$prop['monthlyRental']) / 10 )) / $prop['listingPrice'];
        return number_format( $roi * 100, 1,'.',',');
    }

    public static function medialist($list){
        $media = Media::whereIn('_id',$list)->get();

        $medialist = array();
        foreach ($list as $v) {
            foreach($media as $m){
                if($m['_id'] == $v){
                    $medialist[$v] = $m;
                }
            }
        }

        return $medialist;

    }

    public static function getMedia($mediaId)
    {
        return Media::find($mediaId);
    }

    public static function addCredit($amt){
        $credit = array(
                'userId'=>Auth::user()->_id,
                'amount'=> new MongoInt32($amt),
                'createdDate'=>new MongoDate()
            );
        $cid = Credit::insertGetId($credit);
        return $cid;
    }

    public static function getAvailableCredit(){
        $tc = Credit::where('userId',Auth::user()->_id)->sum('amount');
        $ts = Credittrx::where('userId',Auth::user()->_id)->where('trxStatus','paid')->sum('amount');

        return $tc - $ts;
    }

    public static function spendCredit($amt, $mediaId, $trxStatus = null, $trxId = null){
        $trxId = (is_null($trxId))?str_random(12):$trxId;
        $trxStatus = (is_null($trxStatus))?'paid':$trxStatus;
        $credit = array(
                'userId'=>Auth::user()->_id,
                'mediaId'=> $mediaId,
                'trx_id'=>$trxId,
                'trxStatus'=>$trxStatus,
                'amount'=> new MongoInt32($amt),
                'createdDate'=>new MongoDate()
            );
        $cid = Credittrx::insertGetId($credit);
        return array( $cid, $trxId );
    }

    public static function updateCredittrx($trxStatus, $trxId){
        $res = Credittrx::where('trxId', $trxId)->update( array('trxStatus'=>$trxStatus) );
        return $res;
    }

}

