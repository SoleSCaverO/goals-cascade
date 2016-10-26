<?php

namespace App\Http\Controllers;

use App\Corporative;
use App\CorporativeEnterprise;
use App\Enterprise;
use App\It;
use App\ItCorporative;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CascadeController extends Controller
{
    public function index()
    {
        $corp_enterprises = CorporativeEnterprise::all();
        return view('cascades.index')->with(compact('corp_enterprises'));
    }

    public function it( $enterprise,$corporative )
    {
        $corp = Corporative::find($corporative);
        $corp_enter = CorporativeEnterprise::where('enterprise_id',$enterprise)->where('corporative_id',$corporative)->first();
        $name = $corp_enter->aligned_goal;
        $finance = 0; $client  = 0; $process = 0; $development = 0;
        $its = $corp->its;
        foreach( $its as $it )
        {
            if($it->perspective_id == 1)
                $finance = 1;
            if($it->perspective_id == 2)
                $client = 1;
            if($it->perspective_id == 3)
                $process =1;
            if($it->perspective_id == 4)
                $development = 1;
        }
        $its = $its->sortBy('name');

        return view('cascades.it')->with(compact('its','enterprise','corporative','name','finance','client','process','development'));
    }

    public function process( $enterprise,$corporative,$it )
    {
        $it = It::find($it);
        $name = $it->name;
        $processes = $it->processes;
        $processes = $processes->sortBy('code');
        $category_1 = 0; $category_2 = 0;$category_3 = 0; $category_4  = 0; $category_5 = 0;
        foreach( $processes as $process )
        {
            if($process->category_id == 1)
                $category_1 = 1;
            if($process->category_id == 2)
                $category_2 = 1;
            if($process->category_id == 3)
                $category_3 =1;
            if($process->category_id == 4)
                $category_4 = 1;
            if($process->category_id == 5)
                $category_5 = 1;
        }

        return view('cascades.process')->with(compact('processes','enterprise','corporative','name','category_1','category_2','category_3','category_4','category_5'));
    }
}
