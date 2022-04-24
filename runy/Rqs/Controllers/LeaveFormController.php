<?php

namespace Rqs\Controllers;

use App\Http\Controllers\Controller;
use Rqs\Models\LeaveForm;
use Illuminate\Http\Request;

class LeaveFormController extends Controller
{

    public function index()
    {
        return view('RqsView::forms.indexLeave');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(LeaveForm $leaveForm)
    {
        //
    }


    public function edit(LeaveForm $leaveForm)
    {
        //
    }


    public function update(Request $request, LeaveForm $leaveForm)
    {
        //
    }


    public function destroy(LeaveForm $leaveForm)
    {
        //
    }
}
