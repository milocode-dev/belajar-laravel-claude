<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('produk', [
            'products' => $products,
        ]);
    }

    public function tambah() {
        $product = new Product();
        $product->nama = "Jaket";
        $product->harga = 200000;
        $product->save();

        return "Produk berhasil ditambahkan!";
    }
}
