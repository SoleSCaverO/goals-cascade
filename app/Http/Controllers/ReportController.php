<?php

namespace App\Http\Controllers;

use App\Corporative;
use App\CorporativeEnterprise;
use App\Enterprise;
use Illuminate\Http\Request;

use App\Http\Requests;

class ReportController extends Controller
{
    public function it()
    {
        $corp_enters = CorporativeEnterprise::all();
        $its = collect();
        foreach ($corp_enters as $corp_enter)
            foreach ($corp_enter->corporative->its as $it)
                $its->push($it);
        $its = $its->unique('id');
        $its = $its->sortBy('name');

        $finance = 0; $client  = 0; $process = 0; $development = 0;
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

        return view('reports.it')->with(compact('its','finance','client','process','development'));
    }

    public function process()
    {
        $corp_enters = CorporativeEnterprise::all();
        $processes = collect();
        foreach ($corp_enters as $corp_enter)
            foreach ($corp_enter->corporative->its as $it)
                foreach ($it->processes as $process)
                    $processes->push($process);

        $processes = $processes->unique('id');
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

        return view('reports.process')->with(compact('processes','category_1','category_2','category_3','category_4','category_5'));
    }
}
