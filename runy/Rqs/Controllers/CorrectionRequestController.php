<?php

namespace Rqs\Controllers;

use App\Http\Controllers\Controller;
use Rqs\Models\CorrectionRequest;
use Illuminate\Http\Request;

class CorrectionRequestController extends Controller
{

    public function index()
    {
        return view('RqsView::indexCorrectionRequest');
    }


    public function create()
    {
        return view('RqsView::newCorrectionRequest');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(CorrectionRequest $correctionRequest)
    {
        //
    }


    public function edit(CorrectionRequest $correctionRequest)
    {
        //
    }


    public function update(Request $request, CorrectionRequest $correctionRequest)
    {
        //
    }


    public function destroy(CorrectionRequest $correctionRequest)
    {
        //
    }
}
