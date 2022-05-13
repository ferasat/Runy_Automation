<?php

use App\Models\User;

function userInfo($id){
    return User::query()->findOrFail($id);
}

function fullName($id){
    $user = userInfo($id);
    if ($user == null){
        $full = 'بدون نام';
    }else{
        $full = $user->name . ' '.$user->family ;
    }
    return $full ;
}

function userSignature ($id) {
    $user = userInfo($id);
    if ($user == null){
        $signature = 'بدون نام';
    }else{
        $signature = $user->Signature ;
    }
    return $signature ;
}
function userPic ($id) {
    $user = userInfo($id);
    if ($user == null){
        $signature = 'بدون نام';
    }else{
        $signature = $user->Signature ;
    }
    return $signature ;
}
