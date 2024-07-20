<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use App\Models\Admin\Sejarah;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $data['list_sejarah'] = Sejarah::all();
        return view('admin.sejarah.index', $data);
    }

    public function create()
    {
        return view('admin.sejarah.create');
    }

    public function Show($id)
    {
        return view('admin.sejarah.show', [
            'sejarah' => Sejarah::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.sejarah.edit', [
            'sejarah' => Sejarah::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            'gambar.required' => 'Gambar Harus Diisi',
            'gambar.image' => 'Gambar Harus Berupa Gambar',
            'gambar.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'gambar.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $sejarah = new Sejarah();
        $sejarah->nama = request('nama');
        $sejarah->deskripsi = request('deskripsi');
        $sejarah->save();

        $sejarah->handleUploadGambar();

        return redirect('admin/sejarah')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'string|max:255',
            'gambar' => 'image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'gambar.image' => 'Gambar Harus Berupa Gambar',
            'gambar.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'gambar.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $sejarah = Sejarah::find($id);
        if (request('nama')) $sejarah->nama = request('nama');
        if (request('deskripsi')) $sejarah->deskripsi = request('deskripsi');
        $sejarah->save();

        if (request('gambar')) $sejarah->handleUploadGambar();

        return redirect('admin/sejarah')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $sejarah = Sejarah::find($id);
        $sejarah->handleDeleteGambar();
        $sejarah->delete();
        return redirect('admin/sejarah')->with('danger', 'Data Berhasil Dihapus');
    }
}
