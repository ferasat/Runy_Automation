<?php

use Referral\Models\Referral;

/*function createReferral($from , $to , $description , $type , $type_id )
{
    $new = new Referral() ;
    $new -> from = $from ;
    $new -> signature_from = userSignature($from) ;
    $new -> to = $to ;
    $new -> signature_to = userSignature($to) ;
    $new -> description = $description ;
    $new -> type = $type ;
    $new -> type_id = $type_id ;
    $new -> save();
}*/

function statusReferral($item){
    if ($item == null)
        return 'Not checked';
    elseif($item == 0)
        return 'Not approved';
    else
        return 'Approved';
}

function personInReferral($type , $type_id){
    $referrals = Referral::query()->where([
        'type'=>$type ,
        'type_id'=>$type_id
    ])->get();
    return $referrals ;
}
