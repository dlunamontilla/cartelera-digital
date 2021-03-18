<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke() {
        $title = "Datos - Cartelera Digital";

        $users = [
            "David Luna",
            "Nepzel Petit",
            "Natalia Luna",
            "Sandro Fonseca",
            "Maite Gabriela",
            "Lluvia Arévalo",
            "Alberto Briceño",
            "Marié Destine",
            "<script>alert('Te estoy jodiendo');</script>"
        ];

        if (request()->has("empty"))
            $datos = ["No hay datos"];

        return view("users", compact('title', 'users'));
    }
}
