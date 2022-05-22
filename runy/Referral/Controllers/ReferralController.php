<?php

namespace Referral\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Referral\Models\Referral;

class ReferralController extends Controller
{

    public function index()
    {
        return view('ReferralView::indexReferral');
    }

    public function create($from , $to , $description , $type , $type_id )
    {
        dd($from);
    }

    public function createReferral($user_id ,$from , $to , $description , $type , $type_id )
    {
        $new = new Referral() ;
        $new -> user_id = $user_id ;
        $new -> from = $from ;
        $new -> signature_from = userSignature($from) ;
        $new -> to = $to ;
        $new -> signature_to = userSignature($to) ;
        $new -> description = $description ;
        $new -> type = $type ;
        $new -> type_id = $type_id ;
        $new -> save();
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Referral $referral)
    {
        //
    }


    public function edit(Referral $referral)
    {
        //
    }


    public function update(Request $request, Referral $referral)
    {
        //
    }

    public function destroy(Referral $referral)
    {
        //
    }
}
