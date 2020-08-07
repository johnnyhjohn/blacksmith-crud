<?php

namespace App\Http\Controllers;

use App\Materiais;
use Illuminate\Http\Request;

class MateriaisController extends Controller
{
    
    public function index()
    {
        $data['materiais'] = Materiais::get();

        return view('materiais.index' , $data);
    }
}
