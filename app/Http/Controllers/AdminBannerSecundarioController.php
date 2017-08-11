<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bannersec as Bannersec;

use Validator;

class AdminBannerSecundarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bannersec = Bannersec::all();
        
       return view('bannersecundario.adminindex')->with('bannersec', $bannersec);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('bannersecundario.admincreate');
      
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
            "titulo1"=>"required", 
            "titulo2"=>"required",
            "titulo3"=>"required",
            "titulo4"=>"required",
            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }
        
       $bannersec = new Bannersec;
       $bannersec->titulo1 = $request->titulo1;
       $bannersec->titulo2 = $request->titulo2;
       $bannersec->titulo3 = $request->titulo3;
       $bannersec->titulo4 = $request->titulo4;
       $bannersec->img1 = date('YmdHis').'_'.$_FILES['img1']['name'];
       $bannersec->img2 = date('YmdHis').'_'.$_FILES['img2']['name'];
       $bannersec->img3 = date('YmdHis').'_'.$_FILES['img3']['name'];
       $bannersec->img4 = date('YmdHis').'_'.$_FILES['img4']['name'];
       
       $sizeimg = $_FILES['img1']['size'];
	   $tipo = $_FILES['img1']['type'];
	   $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
			
		$nombreimg = date('YmdHis').'_'.$_FILES['img1']['name'];
		$nombreTemp = $_FILES['img1']['tmp_name'];
		move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
		
		$sizeimg = $_FILES['img2']['size'];
	   $tipo = $_FILES['img2']['type'];
	   $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
			
		$nombreimg = date('YmdHis').'_'.$_FILES['img2']['name'];
		$nombreTemp = $_FILES['img2']['tmp_name'];
		move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
		
		$sizeimg = $_FILES['img3']['size'];
	   $tipo = $_FILES['img3']['type'];
	   $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
			
		$nombreimg = date('YmdHis').'_'.$_FILES['img3']['name'];
		$nombreTemp = $_FILES['img3']['tmp_name'];
		move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
		
		$sizeimg = $_FILES['img4']['size'];
	   $tipo = $_FILES['img4']['type'];
	   $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
			
		$nombreimg = date('YmdHis').'_'.$_FILES['img4']['name'];
		$nombreTemp = $_FILES['img4']['tmp_name'];
		move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);

       $bannersec->save();       

        return redirect()->back()->with('message', 'El Banner ha sido cargado exitosamente');
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
		

        $bannersec = Bannersec::find($id);
        return view('bannersecundario.adminedit',compact('id'))->with('bannersec',$bannersec);

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
        
        if ($request->hasFile('img1') != null){
		$file = $request->file('img1');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = date('YmdHis').'_'.$_FILES['img1']['name'];
		$nombreTemp = $_FILES['img1']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
			 	
		$bannersec = Bannersec::find($id);
		$bannersec->titulo1 = $request->titulo1;
		$bannersec->img1 = date('YmdHis').'_'.$_FILES['img1']['name'];
		$bannersec->save();
		
        return redirect()->back()->with('message', 'Actualización Exitosa');
        }
        ////////////////////
        elseif ($request->hasFile('img2') != null){
		$file = $request->file('img2');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = date('YmdHis').'_'.$_FILES['img2']['name'];
		$nombreTemp = $_FILES['img2']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
			 	
		$bannersec = Bannersec::find($id);
		$bannersec->titulo2 = $request->titulo2;
		$bannersec->img2 = date('YmdHis').'_'.$_FILES['img2']['name'];
		$bannersec->save();
		
        return redirect()->back()->with('message', 'Actualización Exitosa');
        }
        //////////////////////
        elseif ($request->hasFile('img3') != null){
		$file = $request->file('img3');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = date('YmdHis').'_'.$_FILES['img3']['name'];
		$nombreTemp = $_FILES['img3']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
			 	
		$bannersec = Bannersec::find($id);
		$bannersec->titulo3 = $request->titulo3;
		$bannersec->img3 = date('YmdHis').'_'.$_FILES['img3']['name'];
		$bannersec->save();
		
        return redirect()->back()->with('message', 'Actualización Exitosa');
        }
        ////////////////////
        elseif ($request->hasFile('img4') != null){
		$file = $request->file('img4');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = date('YmdHis').'_'.$_FILES['img4']['name'];
		$nombreTemp = $_FILES['img4']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
			 	
		$bannersec = Bannersec::find($id);
		$bannersec->titulo4 = $request->titulo4;
		$bannersec->img4 = date('YmdHis').'_'.$_FILES['img4']['name'];
		$bannersec->save();
		
        return redirect()->back()->with('message', 'Actualización Exitosa');
        }
        
      //////////////////////////////////  
    else{
    	$bannersec = Bannersec::find($id);
		$bannersec->titulo1 = $request->titulo1;
		$bannersec->titulo2 =  $request->titulo2;
		$bannersec->titulo3 =  $request->titulo3;
		$bannersec->titulo4 =  $request->titulo4;
		$bannersec->save();
		return redirect()->back()->with('message', 'Actualización Exitosa');
    	}
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
