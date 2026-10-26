<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Halaman Beranda (Home)
    public function index()
    {
        return view('landing.index');
    }

    // Halaman Toko / Katalog (Shop)
    public function shop()
    {
        return view('landing.shop');
    }

    // Halaman Detail Produk (Shop Detail)
    public function shopDetail()
    {
        return view('landing.shop-detail');
    }

    // Halaman Keranjang Belanja (Cart)
    public function cart()
    {
        return view('landing.cart');
    }

    // Halaman Checkout (Pembayaran)
    public function checkout()
    {
        // Disesuaikan dengan nama file Anda: chackout.blade.php di dalam folder landing
        return view('landing.chackout'); 
    }

    // Halaman Kontak (Contact)
    public function contact()
    {
        return view('landing.contact');
    }
}