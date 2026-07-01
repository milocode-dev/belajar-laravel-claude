<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index() {

        $category = Kategori::all();

        return view('kategori', [
        'kategori' => $category
        ]);
    }
}
