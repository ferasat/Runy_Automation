<?php


namespace Users\Controllers;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function indexUsers()
    {
        return view('UsersView::indexUsers');
    }

    public function editUser()
    {

    }

    public function newUser()
    {
        return view('UsersView::newUser');
    }

}
