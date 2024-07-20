<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Sejarah extends ModelAuthenticate
{
    protected $table = 'sejarah';

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
    ];


    function handleUploadGambar()
    {
        $this->handleDeleteGambar();
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "images/gambar";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteGambar()
    {
        $gambar = $this->gambar;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
