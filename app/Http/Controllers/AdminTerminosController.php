<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Terminos as Terminos;

use Validator;
class AdminTerminosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $terminos = Terminos::all();
        
      return view('terminos.adminindex')->with('terminos', $terminos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('terminos.admincreate');
      
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
      
       $terminos = new Terminos;
       $terminos->terminoscond = $request->nombre;
       $terminos->save();       

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
        $terminos = Terminos::find($id);
        return view('terminos.adminedit')->with('terminos', $terminos);
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
        $terminos = Terminos::find($id);
        $terminos->terminoscond = $request->nombre;
        $terminos->save();
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
           echo'metodo';
    }
}
