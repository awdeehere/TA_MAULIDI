<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class User extends ModelAuthenticate
{
    protected $table = 'users';

    protected $fillable = [
        'type',
        'nama',
        'email',
        'password',
        'foto',
        'no_hp',
        'username'
    ];


    function handleUploadFoto()
    {
        $this->handleDelete();
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

    function handleDelete()
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
