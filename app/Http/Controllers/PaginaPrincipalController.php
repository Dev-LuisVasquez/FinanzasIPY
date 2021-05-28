<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaPrincipalController extends Controller
{
    public function __invoke(){
        return view('estadistica');
    }
}
