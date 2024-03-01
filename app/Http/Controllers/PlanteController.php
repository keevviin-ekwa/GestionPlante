<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanteController extends Controller
{

    public function index()
    {
        $plantes=Plante::findAll();
        return $plantes;
    }
}
