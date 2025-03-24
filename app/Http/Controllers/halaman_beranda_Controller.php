<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data produk populer dan rekomendasi (bisa diganti dengan data dari database)
        $produkPopuler = [
            ['nama' => 'Produk A', 'deskripsi' => 'Deskripsi Produk A', 'harga' => 100000, 'gambar' => 'produk1.jpeg'],
            ['nama' => 'Produk B', 'deskripsi' => 'Deskripsi Produk B', 'harga' => 100000, 'gambar' => 'wedding dress.1.jpg'],
            ['nama' => 'Produk C', 'deskripsi' => 'Deskripsi Produk C', 'harga' => 100000, 'gambar' => 'baju adat.5.jpg'],
            ['nama' => 'Produk D', 'deskripsi' => 'Deskripsi Produk D', 'harga' => 100000, 'gambar' => 'cosplay.3.jpg'],
            ['nama' => 'Produk E', 'deskripsi' => 'Deskripsi Produk E', 'harga' => 100000, 'gambar' => 'wedding dress.2.jpg'],
            ['nama' => 'Produk F', 'deskripsi' => 'Deskripsi Produk F', 'harga' => 100000, 'gambar' => 'baju adat.3.jpg'],
        ];

        $produkRekomendasi = [
            ['nama' => 'Produk G', 'deskripsi' => 'Deskripsi Produk G', 'harga' => 100000, 'gambar' => 'wedding dress.3.jpg'],
            ['nama' => 'Produk H', 'deskripsi' => 'Deskripsi Produk H', 'harga' => 100000, 'gambar' => 'baju adat.1.jpg'],
            ['nama' => 'Produk I', 'deskripsi' => 'Deskripsi Produk I', 'harga' => 100000, 'gambar' => 'cosplay.4.jpg'],
            ['nama' => 'Produk J', 'deskripsi' => 'Deskripsi Produk J', 'harga' => 100000, 'gambar' => 'cosplay.2.jpg'],
            ['nama' => 'Produk K', 'deskripsi' => 'Deskripsi Produk K', 'harga' => 100000, 'gambar' => 'baju adat.4.jpg'],
            ['nama' => 'Produk L', 'deskripsi' => 'Deskripsi Produk L', 'harga' => 100000, 'gambar' => 'cosplay.1.jpg'],
        ];

        return view('home', compact('produkPopuler', 'produkRekomendasi'));
    }
}
