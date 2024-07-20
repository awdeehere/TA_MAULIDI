<x-app>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH DATA PRODUK</h5>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/produk') }}" class="btn btn-primary btn-tone btn-sm mt-4">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('admin/produk') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nama_motif" class="control-label mt-3">NAMA </label>
                                <input type="text" class="form-control" name="nama_motif" id="nama_motif" value="">
                                @error('nama_motif')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="hak_cipta" class="control-label mt-3">HAK CIPTA</label>
                                <input type="text" name="hak_cipta" id="hak_cipta" class="form-control mb-3">
                                @error('hak_cipta')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="foto" class="control-label mt-3">UPLOAD GAMBAR</label>
                                <input type="file" name="foto[]" id="foto" class="form-control mb-3" multiple>
                                @error('foto')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="warna" class="control-label mt-3">WARNA</label>
                                <input type="text" name="warna" id="warna" class="form-control mb-3">
                                @error('warna')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="lebar_kain" class="control-label mt-3">LEBAR KAIN</label>
                                <input type="text" name="lebar_kain" id="lebar_kain" class="form-control mb-3">
                                @error('lebar_kain')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="jenis_produk" class="control-label mt-3">JENIS PRODUK</label>
                                <input type="text" name="jenis_produk" id="jenis_produk" class="form-control mb-3">
                                @error('jenis_produk')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="deskripsi" class="control-label mt-3">DESKRIPSI</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="6"></textarea>
                                @error('deskripsi')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="cara_perawatan" class="control-label mt-3">CARA PERAWATAN</label>
                                <textarea class="form-control" name="cara_perawatan" id="cara_perawatan" cols="30" rows="6"></textarea>
                                @error('cara_perawatan')
                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-tone float-right">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
            $('#cara_perawatan').summernote();
        });
    </script>
</x-app>
