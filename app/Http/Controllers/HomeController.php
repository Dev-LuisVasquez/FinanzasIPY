<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\detalle_documento;



class HomeController extends Controller


{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Cantidad = DB::table('detalle_documento')
        ->Select( DB::raw("count(idDetalle_documento) as detalle_documento"))
        ->addSelect(DB::raw("sum(Cantidad) as Stock"))
        ->addSelect(DB::raw("sum(Valor_Total_Bruto) as Ventas"))
        ->get();
        return view ('estadistica',compact('Cantidad'));
        
    }
}
