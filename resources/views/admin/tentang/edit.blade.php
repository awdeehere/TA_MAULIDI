<x-app>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT DATA TENTANG KAMI
        </h5>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/tentang-kami') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('admin/tentang-kami', $tentang->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="control-label mt-3">JUDUL</label>
                                <input type="text" class="form-control mb-3" name="judul" value="{{ $tentang->judul }}">
                                @error('judul')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                @enderror
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label>DESKRIPSI</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="summernote" cols="60" rows="6" value="{{ $tentang->deskripsi }}">{{ $tentang->deskripsi }}</textarea>
                                @error('deskripsi')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
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