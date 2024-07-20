<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\Penghargaan;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{

    public function index()
    {
        $data['list_penghargaan'] = Penghargaan::all();
        return view('admin.penghargaan.index', $data);
    }

    public function create()
    {
        return view('admin.penghargaan.create');
    }

    public function Show($id)
    {
        return view('admin.penghargaan.show', [
            'penghargaan' => Penghargaan::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.penghargaan.edit', [
            'penghargaan' => Penghargaan::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'tahun' => 'required|string|max:255',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'tahun.required' => 'Tahun Harus Diisi',
            'tahun.string' => 'Tahun Harus Berupa Kalimat',
            'tahun.max' => 'Tahun Maksimal 255 Karakter',
            'foto.required' => 'Gambar Harus Diisi',
            'foto.image' => 'Gambar Harus Berupa Gambar',
            'foto.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'foto.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $penghargaan = new Penghargaan();
        $penghargaan->nama = request('nama');
        $penghargaan->tahun = request('tahun');
        $penghargaan->save();

        $penghargaan->handleUploadFoto();

        return redirect('admin/penghargaan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'string|max:255',
            'tahun' => 'string|max:255',
            'foto' => 'image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'tahun.string' => 'Tahun Harus Berupa Kalimat',
            'tahun.max' => 'Tahun Maksimal 255 Karakter',
            'foto.image' => 'Gambar Harus Berupa Gambar',
            'foto.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'foto.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $penghargaan = Penghargaan::find($id);
        if (request('nama')) $penghargaan->nama = request('nama');
        if (request('tahun')) $penghargaan->tahun = request('tahun');
        $penghargaan->save();

        if (request('foto')) $penghargaan->handleUploadFoto();

        return redirect('admin/penghargaan')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $penghargaan = Penghargaan::find($id);
        $penghargaan->handleDeleteFoto();
        $penghargaan->delete();
        return redirect('admin/penghargaan')->with('danger', 'Data Berhasil Dihapus');
    }
}
