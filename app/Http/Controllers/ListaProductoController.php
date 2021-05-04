<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaProductoController extends Controller
{
    public function __invoke(){
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->orderBy('idProducto')
                    ->get();
    return view('/dashboards/listaProductos')->with('productos',$productos);
    }

}
