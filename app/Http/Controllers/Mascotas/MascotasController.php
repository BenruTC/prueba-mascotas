<?php

namespace App\Http\Controllers\Mascotas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    public function loadMascotas(){
        $mascotas = [];
        for ($i=0; $i < 25 ; $i++) { 
            $mascota['id'] = $i;
            $mascota['nombre'] = 'Perro'.$i;
            $mascota['raza'] = $this->razas();

            array_push($mascotas, $mascota);
        }

        $response['success'] = true;
        $response['data'] = $mascotas;
        return $response;
    }

    public function razas(){
        $razas = [
            0 => 'Criollo',
            1 => 'Pastor alemán',
            2 => 'Bulldog',
            3 => 'Husky',
            4 => 'Poodle',
            5 => 'Golden',
            6 => 'Pitbull'
        ];

        return $razas[rand(0,6)];
    }
}
