<?php

namespace App\Http\Controllers;

use App\Corporative;
use App\CorporativeEnterprise;
use App\Enterprise;
use App\Perspective;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EnterpriseController extends Controller
{
    public function index()
    {
        $enterprises = Enterprise::orderBy('name')->where('user_id',Auth::user()->id)->paginate(4);
        $perspectives = Perspective::all();
        return view('enterprises.index')->with(compact('enterprises','perspectives'));
    }

    public function create( Request $request )
    {
        $enterprise = Enterprise::where('name',$request->get('name'))->first();
        if($enterprise != null)
            return response()->json(['error' => true, 'message' => 'Ya existe un objetivo estrategico registrado con ese nombre']);

        if( strlen( trim($request->get('name')) )== 0 )
            return response()->json(['error' => true, 'message' => 'Ingrese el nombre del objetivo estratégico']);

        if( strlen( trim($request->get('name')) )>500 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico debe ser máximo 500 caracteres']);

        if( strlen( trim($request->get('name')) )<3 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico debe ser mínimo 3 caracteres']);

        $enterprise = Enterprise::create([
            'name'=>$request->get('name'),
            'perspective_id'=>$request->get('perspectives'),
            'user_id'=>Auth::user()->id
        ]);
        $enterprise->save();

        return response()->json(['error' => false, 'message' => 'Objetivo estrategico registrado correctamente']);
    }

    public function edit( Request $request )
    {
        $enterprise = Enterprise::where('name',$request->get('name'))->first();
        if($enterprise != null)
            if( $enterprise->id != $request->get('id') )
                return response()->json(['error' => true, 'message' => 'Ya existe un objetivo estratégico registrado con ese nombre']);

        if( strlen( trim($request->get('name')) )== 0 )
            return response()->json(['error' => true, 'message' => 'Ingrese el nombre del objetivo estratégico']);

        if( strlen( trim($request->get('name')) )>500 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico debe ser máximo 500 caracteres']);

        if( strlen( trim($request->get('name')) )<3 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico debe ser mínimo 3 caracteres']);

        $enterprise = Enterprise::find( $request->get('id') );
        $enterprise->name = $request->get('name');
        $enterprise->perspective_id = $request->get('perspectives');
        $enterprise->save();

        return response()->json(['error' => false, 'message' => 'Objetivo estratégico modificado correctamente']);
    }

    public function delete( Request $request )
    {
        $enterprise = Enterprise::find( $request->get('id') );
        if( $enterprise->aligned ==1 )
            return response()->json(['error' => true, 'message' => 'El objetivo estratégico no puede eliminarse porque está alineado!']);

        $enterprise->delete();

        return response()->json(['error' => false, 'message' => 'Objetivo estratégico eliminado correctamente']);
    }

    public function map()
    {
        $finances = Enterprise::where('perspective_id',1)->where('user_id',Auth::user()->id)->get();
        $clients = Enterprise::where('perspective_id',2)->where('user_id',Auth::user()->id)->get();
        $processes = Enterprise::where('perspective_id',3)->where('user_id',Auth::user()->id)->get();
        $developments = Enterprise::where('perspective_id',4)->where('user_id',Auth::user()->id)->get();
        return view('enterprises.map')->with(compact('finances','clients','processes','developments'));
    }

    public function alignment( $id )
    {
        $enterprise = Enterprise::find($id);
        $perspective = $enterprise->perspective_id;
        $corporatives = Corporative::where('perspective_id',$perspective)->get();

        $corporative_enterprises = CorporativeEnterprise::where('enterprise_id',$id)->get();
        return view('enterprises.align')->with(compact('enterprise','corporatives','corporative_enterprises'));
    }

    public function align( Request $request )
    {
        $id = (int)$request->get('id');
        $aligned =  json_decode( $request->get('aligned') );
        $corporatives =  json_decode( $request->get('corporatives') );

        CorporativeEnterprise::where('enterprise_id',$id)->delete();
        if( count($aligned) != 0 )
            for( $i = 0;$i<count($corporatives); $i++ )
            {
                CorporativeEnterprise::create([
                    'enterprise_id' => $id,
                    'corporative_id' => $corporatives[$i],
                    'aligned_goal' => $aligned[$i]
                ]);
                $enterprise = Enterprise::find($id);
                $enterprise->aligned =1;
                $enterprise->save();
            }
        else
        {
            $enterprise = Enterprise::find($id);
            $enterprise->aligned=0;
            $enterprise->save();
        }

        return response()->json(['error' => false, 'message' => 'Datos guardados correctamente']);
    }
}
