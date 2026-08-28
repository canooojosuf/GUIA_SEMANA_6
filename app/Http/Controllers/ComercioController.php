<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComercioController extends Controller
{
    public function index()
    {

        $comercios = [
            ['id' => 1, 'nombre' => 'Cafe Amanecer'],
            ['id' => 2, 'nombre' => 'Ferreteria San jose'],
            ['id' => 3, 'nombre' => 'Pupuseria El Buen Sabor'],

        ];

        return $comercios;
    }


    public function show($id)
    {
        return "Detalle del  comercio #$id";
    }
}
