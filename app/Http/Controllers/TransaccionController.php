<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function index()
    {
        $transaccion = [

            ['id' => 1, 'comercio' => 'Cafe Amanecer', 'monto' => 20.00, 'estado' => "Aprobado"],
            ['id' => 2, 'comercio' => 'Ferreteria San Jose', 'monto' => 50000.00, 'estado' => "Aprobado"],
            ['id' => 3, 'comercio' => 'Pupuseria El Buen Sabor', 'monto' => 1.00, 'estado' => "Aprobado"],

        ];

        return $transaccion;
    }
}
