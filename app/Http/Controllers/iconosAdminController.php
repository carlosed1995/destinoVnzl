<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests;
use App\Servicio;
use DB;
use Redirect;

class iconosAdminController extends Controller
{
    
    public function __construct(){

       $this->middleware('auth');
        $this->middleware('Admind');
    }
  
  
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $servic = DB::table('n_tiposervicio')->paginate(7);
  
      return view('iconos.index', compact('servic'));
        
    }
	
	public function search(Request $request)
	{
		
		
		if($request->ajax())
		{
			$output = '';
			$icons = DB::table('n_tiposervicio')->where('nombre', 'LIKE', '%'.$request->search.'%')->get();
			
			if($icons)
			{
				foreach($icons as $key => $icon){
				$output ='<tbody>'.
				'<td>'.$icon->nombre.'</td>'.
					'<td>'.'<img width="50" height="50" src="/../public/imagenes/$icon->img">'.'</td>'.
			'<td>'.'</td>'.
				
  '<td>'.
	"{!!link_to_route('iconos.show', $title = 'Eliminar', $parameters = [$icon->id], $attributes = ['class'=>'btn btn-danger'])!!}".
	'</td>'.
        '<td>'.
	"{!!link_to_route('iconos.edit', $title = 'Editar', $parameters = [$icon->id], $attributes = ['class'=>'btn btn-info'])!!}".
	'</td>'.
	

	'</tbody>';
				}
				
				return Response($output);
			}
			
		}
		
		
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('iconos.create'); 
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servic = Servicio::create(
        [  'nombre' => $request['txttitulo'],
         'img' => $_FILES['img']['name'],
        ]
            );
			
		  $sizeimg = $_FILES['img']['size'];
			$tipo = $_FILES['img']['type'];
			
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
	
			$nombreimg = $_FILES['img']['name'];
			$nombreTemp = $_FILES['img']['tmp_name'];
			move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
 
    return   redirect('/iconos')->with('message', 'Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $eliminar = Servicio::find($id);
        $eliminar->delete();
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
         $servicio = Servicio::find($id);
        return view('iconos.edit', compact('servicio'));
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
        
       if ($request->hasFile('img') != null)
    {
        $file = $request->file('img');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = $_FILES['img']['name'];
			  $nombreTemp = $_FILES['img']['tmp_name'];
				move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
        $actualizar = Servicio::find($id);
			  $actualizar->nombre = $request->txttitulo;
        $actualizar->img = $_FILES['img']['name'];
        $actualizar->save();
      
    return   redirect('/iconos')->with('message', 'Se actualizo correctamente');
    
		}else{
			 $actualizar = Servicio::find($id);
        $actualizar->nombre = $request->txttitulo;
        $actualizar->save();
			 return   redirect('/iconos')->with('message', 'Se actualizo correctamente');
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
      
    }
}
