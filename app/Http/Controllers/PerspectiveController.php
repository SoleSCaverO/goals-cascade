<?php

namespace App\Http\Controllers;

use App\Corporative;
use App\Enterprise;
use App\It;
use App\Perspective;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class PerspectiveController extends Controller
{
    public function index()
    {
        $perspectives = Perspective::all();
        return view('perspectives.index')->with(compact('perspectives'));
    }

    public function create( Request $request )
    {
        $perspective = Perspective::where('name',$request->get('name'))->first();
        if($perspective != null)
            return response()->json(['error' => true, 'message' => 'Ya existe una perspectiva registrada con ese nombre']);

        if( strlen( trim($request->get('name')) )== 0 )
            return response()->json(['error' => true, 'message' => 'Ingrese el nombre de la perspectiva']);

        if( strlen( trim($request->get('name')) )>50 )
            return response()->json(['error' => true, 'message' => 'El nombre de la perspectiva debe ser máximo 50 caracteres']);

        if( strlen( trim($request->get('name')) )<3 )
            return response()->json(['error' => true, 'message' => 'El nombre de la perspectiva debe ser mínimo 3 caracteres']);

        $perspective = Perspective::create([
            'name'=>$request->get('name')
        ]);
        $perspective->save();

        return response()->json(['error' => false, 'message' => 'Perspectiva registrada correctamente']);
    }

    public function edit( Request $request )
    {
        $perspective = Perspective::where('name',$request->get('name'))->first();
        if($perspective != null)
            if( $perspective->id != $request->get('id') )
                return response()->json(['error' => true, 'message' => 'Ya existe una perspectiva registrada con ese nombre']);

        if( strlen( trim($request->get('name')) )== 0 )
            return response()->json(['error' => true, 'message' => 'Ingrese el nombre de la perspectiva']);

        if( strlen( trim($request->get('name')) )>50 )
            return response()->json(['error' => true, 'message' => 'El nombre de la perspectiva debe ser máximo 50 caracteres']);

        if( strlen( trim($request->get('name')) )<3 )
            return response()->json(['error' => true, 'message' => 'El nombre de la perspectiva debe ser mínimo 3 caracteres']);

        $perspective = Perspective::find( $request->get('id') );
        $perspective->name = $request->get('name');
        $perspective->save();

        return response()->json(['error' => false, 'message' => 'Perspectiva modificada correctamente']);
    }

    public function delete( Request $request )
    {
        $perspective = Perspective::find($request->get('id'));
        if ( $perspective == null )
            return response()->json(['error' => true, 'message' => 'No existe una perspectiva con ese nombre']);

        $enterprise = Enterprise::where('perspective_id',$request->get('id'))->first();
        $corporative = Corporative::where('perspective_id',$request->get('id'))->first();
        $it = It::where('perspective_id',$request->get('id'))->first();

        if ( $enterprise != null )
            return response()->json(['error' => true, 'message' => 'Error al eliminar - Existen objetivos estratégicos asociados']);

        if ( $corporative != null )
            return response()->json(['error' => true, 'message' => 'Error al eliminar - Existen metas corporativas asociadas']);

        if ( $it != null )
            return response()->json(['error' => true, 'message' => 'Error al eliminar - Existen metas de TI asociadas']);

        $perspective->delete();

        return response()->json(['error' => false, 'message' => 'Perspectiva eliminada correctamente']);
    }
}
