<?php

use Referral\Models\Referral;

function statusRPay($status)
{
    if ($status == 1) {
        return 'send to accounting';
    } elseif ($status == 2) {
        return 'As Accounting Approval';
    } elseif ($status == 3) {
        return 'As Manager Accounting Approval';
    } elseif ($status == 4) {
        return 'As Manager Approval';
    } elseif ($status == 5) {
        return 'Manager Accounting Approval';
    }
}

function statusLeave($status)
{
    if ($status == 0) {
        return 'Not Approve';
    } elseif ($status == 1) {
        return 'Approve';
    } else {
        return 'No Check';
    }
}

function payReferralToMe($user_id, $pay_id)
{
    $a_refer = Referral::query()->where([
        'to' => $user_id,
        'type' => 'pay',
        'type_id' => $pay_id,
    ])->first();

    if ($a_refer == null)
        return false;
    else
        return true;
}

function statusApprove($num)
{
    if ($num == 1)
        return 'Approve';
    else
        return 'Not approved';
}

function getInfoRqsAsReferral($id , $type)
{
    if ($type == 'pay'){
        return \Rqs\Models\PaymentRequest::query()->findOrFail($id);
    }elseif($type == 'Correction'){
        return \Rqs\Models\CorrectionRequest::query()->findOrFail($id);
    }elseif($type == 'Leave'){
        return \Rqs\Models\LeaveForm::query()->findOrFail($id);
    }elseif($type == 'OverTime') {
        return \Rqs\Models\OvertimeForm::query()->findOrFail($id);
    }else {
        return null ;
    }
}
