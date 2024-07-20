<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ProdukCarousel extends ModelAuthenticate
{
    protected $table = 'produk_carousel';

    protected $fillable = ['id_produk', 'foto'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    function handleUploadImage($idProduk)
    {
        $this->handleDeleteImage($idProduk);
        $carousels = ProdukCarousel::where("id_produk", $idProduk)->select('foto')->get();

        if (request()->hasFile('foto')) {
            $destination = "images/foto";
            $uploadedFiles = request()->file('foto');
            $urls = [];

            if ($carousels) {
                foreach ($carousels as $item) {
                    $urls[] = $item->foto;
                }
            }

            if (request()->hasFile('foto')) {
                foreach ($uploadedFiles as $file) {
                    $randomStr = Str::random(5);
                    $filename = $idProduk . "-" . time() . "-" . $randomStr . "." . $file->extension();
                    $path = $destination . '/' . $filename;
                    // Simpan file ke disk lokal
                    Storage::disk('local')->put($path, file_get_contents($file->getRealPath()));

                    // Simpan URL asset dan ukuran dalam array
                    $urls[] = "app/" . $path;
                }
            }

            // Simpan data ke database
            foreach ($urls as $url) {
                ProdukCarousel::updateOrCreate(
                    ['id_produk' => $idProduk, 'foto' => $url],
                    ['id_produk' => $idProduk, 'foto' => $url]
                );
            }
        }
    }

    function handleDeleteImage($idProduk)
    {
        $urls = $this->where("id_produk", $idProduk)->select('foto')->get();

        if ($urls) {
            foreach ($urls as $url) {
                $urlAsset = $url->foto;
                ProdukCarousel::where("foto", $urlAsset)->delete();
                $path = public_path($urlAsset);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            return true;
        }
    }
}
