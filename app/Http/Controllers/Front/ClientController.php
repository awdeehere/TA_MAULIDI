<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Artikel;
use App\Models\Admin\Penghargaan;
use App\Models\Admin\Pengrajin;
use App\Models\Admin\Sejarah;
use App\Models\Admin\Produk;
use App\Models\Admin\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    function home()
    {
        $artikel = Artikel::orderBy('updated_at', 'desc')->take(3)->get();
        return view('frontview.home', compact('artikel'));
    }

    function galeri()
    {
        $sejarah = Sejarah::first();
        $penghargaan = Penghargaan::all();
        $pengrajin = Pengrajin::all();
        return view('frontview.galeri', compact('sejarah', 'penghargaan', 'pengrajin'));
    }

    function katalog()
    {
        $produk = Produk::with('carousels')->get();
        return view('frontview.katalog', compact('produk'));
    }

    function about()
    {
        $tentang = Tentang::first();
        return view('frontview.about', compact('tentang'));
    }

    function artikel($slug)
    {
        // Mengambil semua artikel dan menambahkan short_content
        $artikels = Artikel::all();
        foreach ($artikels as $artikel) {
            $artikel->short_content = Str::words(strip_tags($artikel->konten), 10, '...');
        }

        // Mengambil artikel berdasarkan slug
        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        // Kirim artikel dan artikels ke view jika diperlukan
        return view('frontview.artikel', compact('artikel', 'artikels'));

    }
}