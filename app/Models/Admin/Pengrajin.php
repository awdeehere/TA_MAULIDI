<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Pengrajin extends ModelAuthenticate
{
    protected $table = 'pengrajin';

    protected $fillable = [
        'foto',
        'nama',
    ];


    function handleUploadFoto()
    {
        $this->handleDeleteFoto();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/foto";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFoto()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
