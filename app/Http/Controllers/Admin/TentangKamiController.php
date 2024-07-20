<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TentangKamiController extends Controller
{
    public function index()
    {
        $data['list_tentang'] = Tentang::all();

        return view('admin.tentang.index', $data);
    }

    public function Show($id)
    {
        return view('admin.tentang.show', [
            'tentang' => Tentang::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.tentang.edit', [
            'tentang' => Tentang::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('admin.tentang.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required',
            'judul' => 'required',
        ], [
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            'judul.required' => 'Judul Harus Diisi',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $tentang = new Tentang();
        $tentang->judul = request('judul');
        $tentang->deskripsi = request('deskripsi');
        $tentang->save();

        return redirect('admin/tentang-kami')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required',
            'judul' => 'required',
        ], [
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            'judul.required' => 'Judul Harus Diisi',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $tentang = Tentang::find($id);
        if (request('judul')) $tentang->judul = request('judul');
        if (request('deskripsi')) $tentang->deskripsi = request('deskripsi');
        $tentang->save();

        return redirect('admin/tentang-kami')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $tentang = Tentang::find($id);
        $tentang->delete();
        return redirect('admin/tentang-kami')->with('danger', 'Data Berhasil Dihapus');
    }
}
