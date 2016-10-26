<?php

namespace App\Http\Controllers;

use App\Corporative;
use App\Enterprise;
use App\EnterpriseIt;
use App\It;
use App\Perspective;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EnterpriseItController extends Controller
{
    public function index()
    {
        $enterprises = EnterpriseIt::orderBy('name')->where('user_id',Auth::user()->id)->paginate(4);
        $perspectives = Perspective::all();
        return view('enterprise_it.index')->with(compact('enterprises','perspectives'));
    }

    public function create( Request $request )
    {
        $enterprise = EnterpriseIt::where('name',$request->get('name'))->first();
        if($enterprise != null)
            return response()->json(['error' => true, 'message' => 'Ya existe un objetivo estrategico de TI registrado con ese nombre']);

        if( strlen( trim($request->get('name')) )== 0 )
            return response()->json(['error' => true, 'message' => 'Ingrese el nombre del objetivo estratégico de TI']);

        if( strlen( trim($request->get('name')) )>500 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico de TI debe ser máximo 500 caracteres']);

        if( strlen( trim($request->get('name')) )<3 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico de TI debe ser mínimo 3 caracteres']);

        $enterprise = EnterpriseIt::create([
            'name'=>$request->get('name'),
            'perspective_id'=>$request->get('perspectives'),
            'user_id'=>Auth::user()->id
        ]);
        $enterprise->save();

        return response()->json(['error' => false, 'message' => 'Objetivo estrategico de TI registrado correctamente']);
    }

    public function edit( Request $request )
    {
        $enterprise = EnterpriseIt::where('name',$request->get('name'))->first();
        if($enterprise != null)
            if( $enterprise->id != $request->get('id') )
                return response()->json(['error' => true, 'message' => 'Ya existe un objetivo estratégico de TI registrado con ese nombre']);

        if( strlen( trim($request->get('name')) )== 0 )
            return response()->json(['error' => true, 'message' => 'Ingrese el nombre del objetivo estratégico de TI']);

        if( strlen( trim($request->get('name')) )>500 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico de TI debe ser máximo 500 caracteres']);

        if( strlen( trim($request->get('name')) )<3 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico de TI debe ser mínimo 3 caracteres']);

        $enterprise = EnterpriseIt::find( $request->get('id') );
        $enterprise->name = $request->get('name');
        $enterprise->perspective_id = $request->get('perspectives');
        $enterprise->save();

        return response()->json(['error' => false, 'message' => 'Objetivo estratégico de TI modificado correctamente']);
    }

    public function delete( Request $request )
    {
        $enterprise = EnterpriseIt::find( $request->get('id') );
        $enterprise->delete();

        return response()->json(['error' => false, 'message' => 'Objetivo estratégico de TI eliminado correctamente']);
    }

    public function panels()
    {
        $finances = EnterpriseIt::where('perspective_id',1)->where('user_id',Auth::user()->id)->get();
        $clients = EnterpriseIt::where('perspective_id',2)->where('user_id',Auth::user()->id)->get();
        $processes = EnterpriseIt::where('perspective_id',3)->where('user_id',Auth::user()->id)->get();
        $developments = EnterpriseIt::where('perspective_id',4)->where('user_id',Auth::user()->id)->get();
        return view('enterprise_it.align')->with(compact('finances','clients','processes','developments'));
    }

    public function its( $id )
    {
        $enterpriseIt = EnterpriseIt::find($id);
        $perspective_id = $enterpriseIt->perspective_id;

        $enterprises = Enterprise::where('aligned',1)->get();
        $corporative_ids = [];
        foreach( $enterprises as $enterprise )
            $corporative_ids[] = $enterprise->corporative_id;

        $corporatives = Corporative::find($corporative_ids);
        $its_collection = collect();
        foreach( $corporatives as $corporative )
            foreach ( $corporative->its as $it )
                if( $it->perspective_id == $perspective_id )
                    $its_collection->push($it);

        $its = $its_collection->unique('id');
        $its = $its->sortBy('name');

        return response()->json($its);
    }

    public function align( Request $request )
    {
        $it = It::find($request->get('its'));
        $enterprise = EnterpriseIt::where('name',$request->get('aligned'))->first();

        if($enterprise != null)
            if( $enterprise->id != $request->get('id') )
                return response()->json(['error' => true, 'message' => 'Ya existe un objetivo estratégico de TI registrado con ese nombre']);

        if( $it == null )
            return response()->json(['error' => true, 'message' => 'La meta TI no es válida']);

        if( strlen( trim($request->get('aligned')) )== 0 )
            return response()->json(['error' => true, 'message' => 'Ingrese objetivo estratégico de TI alineado']);

        if( strlen( trim($request->get('aligned')) )<3 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico de TI alineado debe ser mínimo 3 caracteres']);

        if( strlen( trim($request->get('aligned')) )>500 )
            return response()->json(['error' => true, 'message' => 'El nombre del objetivo estratégico de TI alineado debe ser máximo 500 caracteres']);

        $enterprise = EnterpriseIt::find($request->get('id'));
        $enterprise->name = $request->get('aligned');
        $enterprise->it_id = $request->get('its');
        $enterprise->aligned = 1;
        $enterprise->save();

        return response()->json(['error' => false, 'message' => 'Objetivo estratégico de TI alineado correctamente']);
    }
}
