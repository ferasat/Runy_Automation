<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    // dd($full);
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
        $pic = 'بدون نام';
    }else{
        $pic = $user->pic ;
    }
    return $pic ;
}

function is_accounting($user_id){
    $user = User::query()->findOrFail($user_id);
    if ($user->levelPermission == 6 or $user->levelPermission == 9 or $user->levelPermission == 10)
        return true ;
    else
        return false ;
}
