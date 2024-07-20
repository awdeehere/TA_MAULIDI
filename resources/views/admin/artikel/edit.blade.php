<x-app>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT ARTIKEL
        </h5>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/artikel') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i
                    class="fas fa-arrow-left"></i> Kembali</a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('admin/artikel', $artikel->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="control-label mt-3">JUDUL </label>
                                <input type="text" class="form-control" name="judul"
                                    value="{{ $artikel->judul }}">
                                @error('judul')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                        style="font-size: 12px">
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="control-label mt-3">THUMBNAIL</label>
                                <input type="file" name="foto" class="form-control mb-3"
                                    value="{{ $artikel->thumbnail }}">
                                @error('tumbnail')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                        style="font-size: 12px">
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="control-label mt-3">KONTEN</label>
                                <input type="text" name="tahun" class="form-control mb-3"
                                    value="{{ $artikel->konten }}">
                                @error('konten')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                        style="font-size: 12px">
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-tone float-right"><i class="fa fa-save"></i>
                                    Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app>
