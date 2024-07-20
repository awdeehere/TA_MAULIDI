<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends ModelAuthenticate
{
    protected $table = 'tentang';

    protected $fillable = [
        'deskripsi',
    ];
}
