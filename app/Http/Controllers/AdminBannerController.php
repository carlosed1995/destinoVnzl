<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Banner as Banner
;

use Validator;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $banner = Banner::all();
        
      return view('banner.adminindex')->with('banner', $banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('banner.admincreate');
      
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
 
           
            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }
      
       $banner = new Banner;
       $banner->titulo1 = $request->titulo1;
       $banner->titulo2 = $request->titulo2;
       $banner->img = date('YmdHis').'_'.$_FILES['img']['name'];
       
       		  $sizeimg = $_FILES['img']['size'];
			$tipo = $_FILES['img']['type'];
			
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 

			
			
				$nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
			$nombreTemp = $_FILES['img']['tmp_name'];
				move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);

       $banner->save();       

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
		

        $banner = Banner::find($id);

        return view('banner.adminedit',compact('id'))->with('banner',$banner);

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
        if ($request->hasFile('img') != null){
	 $file = $request->file('img');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
		$nombreTemp = $_FILES['img']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
			 	
		$banner = Banner::find($id);
		$banner->titulo1 = $request->titulo1;
		$banner->titulo2 =  $request->titulo2;
		$banner->img = date('YmdHis').'_'.$_FILES['img']['name'];
		$banner->save();
		
        return redirect()->back()->with('message', 'Actualización Exitosa');
        }
    else{
    	
    	$banner = Banner::find($id);
		$banner->titulo1 = $request->titulo1;
		$banner->titulo2 =  $request->titulo2;
		$banner->save();
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
