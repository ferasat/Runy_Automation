<?php

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
    }else {
        return 'No Check';
    }
}
