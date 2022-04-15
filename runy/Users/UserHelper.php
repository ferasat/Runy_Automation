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
