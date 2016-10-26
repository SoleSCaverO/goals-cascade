<?php

namespace App\Http\Controllers;

use App\Corporative;
use App\CorporativeEnterprise;
use Illuminate\Http\Request;

use App\Http\Requests;

class CorporativeController extends Controller
{
    public function corporative( $corporative )
    {
        $corporative = Corporative::find($corporative);
        return response()->json($corporative);
    }

    public function corporatives_id( $enterprise )
    {
        $corporative_enterprises = CorporativeEnterprise::where('enterprise_id',$enterprise)->get();
        $corporative_id = [];
        foreach( $corporative_enterprises as $corporative_enterprise )
            $corporative_id [] = $corporative_enterprise->corporative_id;

        return response()->json($corporative_id);
    }

    public function corporatives_name( $enterprise )
    {
        $corporative_enterprises = CorporativeEnterprise::where('enterprise_id',$enterprise)->get();
        $corporative_name = [];
        foreach( $corporative_enterprises as $corporative_enterprise )
            $corporative_name [] = $corporative_enterprise->aligned_goal;

        return response()->json($corporative_name);
    }
}
