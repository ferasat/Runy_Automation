<?php

use Referral\Models\Referral;

function createReferral($user_id = null, $from, $to, $description, $type, $type_id)
{
    $new = new Referral();
    $new->user_id = $user_id;
    $new->from = $from;
    $new->signature_from = userSignature($from);
    $new->to = $to;
    $new->signature_to = userSignature($to);
    $new->description = $description;
    $new->type = $type;
    $new->type_id = $type_id;
    $new->save();
}

function statusReferral($item)
{
    if ($item == null)
        return 'Not checked';
    elseif ($item == 0)
        return 'Not approved';
    else
        return 'Approved';
}

function personInReferral($type, $type_id)
{
    $referrals = Referral::query()->where([
        'type' => $type,
        'type_id' => $type_id
    ])->get();
    return $referrals;
}

function referralToMe($user_id, $type)
{
    $referral = Referral::query()->where([
        'to' => $user_id,
        'type' => $type,
    ])->get();
    return $referral;
}

function get_ref_create($type, $type_id)
{
    $referrals = Referral::query()->where([
        'type' => $type,
        'type_id' => $type_id
    ])->first();
    if ($referrals == null) {
        dd($referrals, $type, $type_id);
    }
    //dd($referrals);
    return $referrals;
}


