<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Estado as Estado;
use App\Ciudad as Ciudad;

use App\Especialidad as Especialidad;

class FrontController extends Controller
{
    public function __construct(){

       $this->middleware('auth', ['only' => 'admin']);
         $this->middleware('Admind');
    }
   
    public function index()
    {
      
    }

    public function contacto(){
       
    }
    public function reviews(){
     
    }

   public function show()
    {
        
    }




    //Recordar para acceder a una carpeta se coloca el nombre de la carpeta y despues el nombre del archivo
    public function admin(){
       return view('indexAdmin'); 
    }



   
}
