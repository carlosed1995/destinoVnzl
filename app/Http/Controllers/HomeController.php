<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Hotel as Hotel;
use App\Planesvip as Planesvip;
use App\PruebaHotel as PruebaHotel;
use App\Restaurant as Restaurant;
use App\Parques;
use App\Banner as Banner;
use App\Bannersec as Bannersec;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
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
        $parques = Parques::all();
        $banner = Banner::all();
        $bannersec = Bannersec::all();
        return view('/home')->with('banner', $banner)->with('bannersec', $bannersec);
    }
}