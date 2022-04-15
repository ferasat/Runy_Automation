<?php

namespace Rp\Controllers;

use Illuminate\Http\Request;
use Rp\Models\Role;
use Rp\Models\RpPart;

class UserRoleController
{
    public function index()
    {
        $roles = Role::all()->sortByDesc('id');
        $parts = RpPart::all()->sortByDesc('id');
        return view( 'RpView::newRole' , compact('roles' , 'parts' ));
    }
}
