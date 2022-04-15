<?php

namespace Rp\Controllers;

use Rp\Models\Role;
use Rp\Models\RpPart;
use Rp\Models\UserRolePermission;
use Illuminate\Http\Request;

class UserRolePermissionController
{

    public function index()
    {
        $roles = Role::all()->sortByDesc('id');
        $parts = RpPart::all()->sortByDesc('id');

        return view( 'RpView::index' , compact('roles' , 'parts'));
    }


    public function createRole()
    {

    }

    public function createPart()
    {
        $parts = RpPart::all()->sortByDesc('id');
        return view( 'RpView::newPart' , compact('parts' ));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(UserRolePermission $userRolePermission)
    {
        //
    }


    public function edit(UserRolePermission $userRolePermission)
    {
        //
    }


    public function update(Request $request, UserRolePermission $userRolePermission)
    {
        //
    }


    public function destroy(UserRolePermission $userRolePermission)
    {
        //
    }
}
