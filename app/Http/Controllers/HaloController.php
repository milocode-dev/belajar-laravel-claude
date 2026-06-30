<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index() {

        $nama = "Radit";
        $produk = [
            ["nama" => "Sepatu", "harga" => 150000],
            ["nama" => "Kaos", "harga" => 20000],
            ["nama" => "Topi", "harga" => 45000],
        ];

        return view('halo', [
            'nama' => $nama,
            'produk' => $produk,
        ]);
    }

    public function profile() {

        $company = "PT Fion";
        $karyawan = [
            ["nama" => "Budo", "status" => "CEO"],
            ["nama" => "Buda", "status" => "Manager"],
            ["nama" => "Budu", "status" => "Founder"],
        ];

        $produk = ["Vitamin", "Haircare", "Suplemen"];

        return view('profile', [
            'perusahaan' => $company,
            'karyawan' => $karyawan,
            'produk' => $produk,
        ]);
    }
}
