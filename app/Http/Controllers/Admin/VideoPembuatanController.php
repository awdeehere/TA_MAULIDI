<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use Illuminate\Http\Request;

class VideoPembuatanController extends Controller
{

    public function index()
    {
        return view('admin.video-pembuatan.index');
    }
}
