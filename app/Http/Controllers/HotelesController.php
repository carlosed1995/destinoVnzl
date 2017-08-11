<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


//use App\Estado as Estado;
//use App\Ciudad as Ciudad;
use App\Categoria as Categoria;
use App\PruebaHotel as PruebaHotel;
use Validator;
use App\Ajuste;
use App\ReservaHotel;
use App\Zonas;
use App\pais;
use App\Ciudades;
use App\estadoc;
use  App\TipoServicios;
use App\Imagen as Imagen;
use Session;
use View;
use DB;
use App\Hoteles as Hoteles;

class HotelesController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $pruebahotel = PruebaHotel::paginate(8); 
		
        return view('hoteles.index', compact('pruebahotel'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad = Ciudad::pluck('nombre','id');
        $estado = Estado::pluck('nombre', 'id_estado');
        $categoria = Categoria::pluck('tipo', 'idCategoria');
			
				$tiposerv = DB::table('t_tipos_serv')
            ->join('pruebahotel','pruebahotel.id', '=', 't_tipos_serv.idEntidad')
						->join('n_tiposervicio','n_tiposervicio.id', '=', 't_tipos_serv.tipo')
           	//LIMITAR LAS IMAGENES  /////////
            ->where('t_tipos_serv.idEntidad', '=', $id)
            ->select('n_tiposervicio.*')
           	->get();
			
		
			
            return view('hoteles.create')->with('ciudad',$ciudad)->with('estado',$estado)->with('categoria', $categoria);
    
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
            "direccion" =>"required",
            "telefono"=>"required|numeric",
            "telefono2"=>"required|numeric",
            "descripcion"=>"required",
            "url"=>"required",
            "correo"=>"required",
            "terminosCond"=>"required",
            "horario"=>"required",
            "descuento"=>"required",
            "rif"=>"required", 
              

            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }

       $hotel = new Hotel;
       $hotel->nombre = $request->nombre;
       $hotel->direccion =$request->direccion;
       $hotel->telefono =$request->telefono;
       $hotel->telefono2 =$request->telefono2;
       $hotel->descripcion =$request->descripcion;
       $hotel->url =$request->url;
       $hotel->correo =$request->correo;
       $hotel->terminosCond =$request->terminosCond;
       $hotel->horario =$request->horario;
       $hotel->descuento =$request->descuento;
       $hotel->rif =$request->rif;
       $hotel->imagenes_hotel =$request->imagenes_hotel;
       $hotel->id_ciudad =$request->ciudad;
       $hotel->id_estado =$request->estado;
       $hotel->id_categoria =$request->categoria;


       $hotel->save();

       Session::flash('flash_message', 'El doctor ha sido registrado exitosamente!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$sql="SELECT
pruebahotel.id,
pruebahotel.nombre,
pruebahotel.direccion,
pruebahotel.telefono,
pruebahotel.created_at,
pruebahotel.updated_at,
pruebahotel.descripcion,
pruebahotel.url,
pruebahotel.correo,
pruebahotel.terminosCond,
pruebahotel.horario,
pruebahotel.descuento,
pruebahotel.rif,
pruebahotel.idpais,
pruebahotel.id_estado,
pruebahotel.id_ciudad,
pruebahotel.id_zona,
pruebahotel.telefono2,
pruebahotel.img,
pruebahotel.etiquetas,
pruebahotel.navicu,
pruebahotel.Experiencias,
pruebahotel.act,
pruebahotel.estrellas,
paises.Nombre as Pais,
estados.Nombre as Estado,
ciudades.Nombre as Ciudad,
zonas.Nombre as Zona
FROM
pruebahotel
LEFT JOIN estados ON pruebahotel.id_estado = estados.id
LEFT JOIN ciudades ON ciudades.idEstado = estados.id AND pruebahotel.id_ciudad = ciudades.id
LEFT JOIN zonas ON zonas.idCiudad = ciudades.id AND pruebahotel.id_zona = zonas.id
LEFT JOIN paises ON pruebahotel.idpais = paises.id AND estados.idPais = paises.id

WHERE pruebahotel.id='".$id."'";
	$pruebahotel =DB::selectOne($sql);
       	//$reservaHotel = ReservaHotel::all();
		//$hoteles = Hoteles::all();
		//$pruebahotel = PruebaHotel::where('id','=',$id)->get()->first();        
        //$ciudad = Ciudades::pluck('Nombre','id');
        //$estado = estadoc::pluck('Nombre', 'id');
        //$categoria = Categoria::pluck('tipo', 'idCategoria');
		//$tiposerv = TipoServicios::pluck('tipo', 'id');
		//$imagen = Imagen::pluck('nombre','id');
		$imagen = DB::table('t_imagenes')
            ->join('pruebahotel','pruebahotel.id', '=', 't_imagenes.id_Entidad')
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_imagenes.id_Entidad', '=', $id)
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           	->get();
			
			$tiposerv = DB::table('t_tipos_serv')
            ->join('pruebahotel','pruebahotel.id', '=', 't_tipos_serv.idEntidad')
						->join('n_tiposervicio','n_tiposervicio.id', '=', 't_tipos_serv.tipo')
           	//LIMITAR LAS IMAGENES  /////////
            ->where('t_tipos_serv.idEntidad', '=', $id)
            ->select('n_tiposervicio.*')
           	->get();

        return view('hoteles.show')->with('pruebahotel', $pruebahotel)->with('imagen', $imagen)->with('tiposerv', $tiposerv);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
