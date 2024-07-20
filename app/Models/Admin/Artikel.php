<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Artikel extends ModelAuthenticate
{
    protected $table = 'artikel';

    protected $fillable = [
        'thumbnail',
        'judul',
        'konten'
    ];

    public function getTanggalAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }



    function handleUploadFoto()
    {
        $this->handleDeleteFoto();
        if (request()->hasFile('thumbnail')) {
            $thumbnail = request()->file('thumbnail');
            $destination = "images/thumbnail";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $thumbnail->extension();
            $url = $thumbnail->storeAs($destination, $filename);
            $this->thumbnail = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFoto()
    {
        $thumbnail = $this->thumbnail;
        if ($thumbnail) {
            $path = public_path($thumbnail);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}