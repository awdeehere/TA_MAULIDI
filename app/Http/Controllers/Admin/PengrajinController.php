<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\Pengrajin;
use Illuminate\Http\Request;

class PengrajinController extends Controller
{

    public function index()
    {
        $data['list_pengrajin'] = Pengrajin::all();
        return view('admin.pengrajin.index', $data);
    }

    public function create()
    {
        return view('admin.pengrajin.create');
    }

    public function Show($id)
    {
        return view('admin.pengrajin.show', [
            'pengrajin' => Pengrajin::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.pengrajin.edit', [
            'pengrajin' => Pengrajin::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            'deskripsi.string' => 'Deskripsi Harus Berupa Kalimat',
            'deskripsi.max' => 'Deskripsi Maksimal 255 Karakter',
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

        $pengrajin = new Pengrajin();
        $pengrajin->nama = request('nama');
        $pengrajin->deskripsi = request('deskripsi');
        $pengrajin->save();

        $pengrajin->handleUploadFoto();

        return redirect('admin/pengrajin')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'string|max:255',
            'deskripsi' => 'string|max:255',
            'foto' => 'image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'deskripsi.string' => 'Deskripsi Harus Berupa Kalimat',
            'deskripsi.max' => 'Des Maksimal 255 Karakter',
            'foto.image' => 'Gambar Harus Berupa Gambar',
            'foto.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'foto.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $pengrajin = Pengrajin::find($id);
        if (request('nama')) $pengrajin->nama = request('nama');
        if (request('deskripsi')) $pengrajin->deskripsi = request('deskripsi');
        $pengrajin->save();

        if (request('foto')) $pengrajin->handleUploadFoto();

        return redirect('admin/pengrajin')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $pengrajin = Pengrajin::find($id);
        $pengrajin->handleDeleteFoto();
        $pengrajin->delete();
        return redirect('admin/pengrajin')->with('danger', 'Data Berhasil Dihapus');
    }
}