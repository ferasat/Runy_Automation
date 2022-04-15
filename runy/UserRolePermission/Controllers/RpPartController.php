<?php

namespace Rp\Controllers;

use App\Models\RpPart;
use Illuminate\Http\Request;
use Rp\Models\Role;

class RpPartController
{

    public function index()
    {
        $roles = Role::all()->sortByDesc('id');
        $parts = \Rp\Models\RpPart::all()->sortByDesc('id');
        return view( 'RpView::newPart' , compact('roles' , 'parts' ));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(RpPart $rpPart)
    {
        //
    }


    public function edit(RpPart $rpPart)
    {
        //
    }


    public function update(Request $request, RpPart $rpPart)
    {
        //
    }


    public function destroy(RpPart $rpPart)
    {
        //
    }
}
