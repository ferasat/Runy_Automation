<?php


namespace Users\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function indexUsers()
    {
        return view('UsersView::indexUsers');
    }

    public function editUser()
    {
        $user_id =$_REQUEST['user_id'];
        $user = User::query()->findOrFail($user_id);
        return view('UsersView::editUser' , compact('user'));
    }

    public function newUser()
    {
        return view('UsersView::newUser');
    }

}
