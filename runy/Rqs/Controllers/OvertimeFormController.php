<?php

namespace Rqs\Controllers;

use App\Http\Controllers\Controller;
use Rqs\Models\OvertimeForm;
use Illuminate\Http\Request;

class OvertimeFormController extends Controller
{
    public function index()
    {
        return view('RqsView::forms.indexOverTime');
    }

    public function create()
    {
        return view('RqsView::forms.newOverTime');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(OvertimeForm $overtimeForm)
    {
        //
    }

    public function edit(OvertimeForm $overtimeForm)
    {
        //
    }

    public function update(Request $request, OvertimeForm $overtimeForm)
    {
        //
    }

    public function destroy(OvertimeForm $overtimeForm)
    {
        //
    }
}
