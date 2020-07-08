<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{
    public function index() {
        $vestiti = Cloth::all();
        return view('clothes', ['lista_vestiti' => $vestiti]);
    }
}
