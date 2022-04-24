<?php

use Illuminate\Support\Facades\Auth;
use Rp\Models\RpPart;
use Rp\Models\UserRole;
use Rp\Models\UserRolePermission;

function part ($id){
    return RpPart::query()->find($id);
}
function part_name ($id){
    $part = part ($id);
    return $part->name;
}

function accessUser($user_id , $slug){
    $userRole = UserRole::query()->where('user_id' , $user_id)->first();
    $part = RpPart::query()->where('slug' , $slug)->first();
    //dd($userRole);
    if ($userRole == null ){
        return false ;
    }
    $rolePerParts = UserRolePermission::query()->where([
        'role_id' => $userRole->role_id ,
        'rp_part_id' => $part->id
    ])->first(); // دسترسی هایی که این سمت دارد
    //dd($rolePerParts);
    if ($rolePerParts == null){
        return redirect(route('dashboard'));
    }else {
        if ($rolePerParts->access == 1){
            return true ;
        }else {
            return false ;
        }
    }

}

function is_admin($id){
    if (Auth::user()->levelUser == 'Admin' or Auth::user()->levelUser == 'SAdmin')
        return true;
    else return false;
}

function cancelHotel($id)
{
    if ($id == 1)
        return 'Yes';
    else return 'No';
}
