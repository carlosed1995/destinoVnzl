<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Modo as Modo;

use Validator;

class ModousoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modo = Modo::all();
        
      return view('modo.adminindex')->with('modo', $modo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modo.admincreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $rules = array(

            "nombre"=>"required",            
           
            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }
      
       $modo = new Modo;
       $modo->modo = $request->nombre;
       $modo->save();       

        return redirect()->back()->with('message', 'Los terminos y condiciones se han creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modo = Modo::find($id);
        return view('modo.adminedit')->with('modo', $modo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modo = Modo::find($id);
        $modo->modo = $request->nombre;
        $modo->save();
        return redirect()->back()->with('message', 'Actualización Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
