<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karya;

class KaryaController extends Controller
{
    public function index()
    {
        $data_karya = Karya::all();
        return view('projects', compact('data_karya'));
    }
}
