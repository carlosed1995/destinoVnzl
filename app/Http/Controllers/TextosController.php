<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Textos;

class TextosController extends Controller
{
	
	 public function index()
    {
      
   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
    
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $act =  Textos::find($id);
         $act->act2 = 1;
          $act->save();
           return redirect()->back();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $act  = Textos::find($id);
          $act->act2 = 0;
           $act->save();
           return redirect()->back();
   
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
    	 
     $textos =  Textos::find($id);
            	
         $textos->titulo1 = $request->titulo1;
         $textos->texto1  = $request->txttitulo1; 
       
         $textos->titulo2  =$request->titulo2; 
         $textos->texto2  = $request->txttitulo2;
         //$textos->act2  => $check1,
         $textos->titulo3  = $request->titulo3; 
         $textos->texto3  = $request->txttitulo3;
         //$textos->act3  => $check2,
         $textos->titulo4  = $request->titulo4; 
         $textos->texto4  = $request->txttitulo4;
          //act4 => $check3,;
       $textos->save();

            
    // bcrypt(sirve para encriptar)
    return   redirect()->back()->with('message', 'Texto actualizado  Exitosamente');	
    	
       
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