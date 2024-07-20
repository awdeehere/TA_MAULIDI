<x-app>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PRODUK
        </h5>
    </div>
    <a href="{{ url('admin/produk') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i>
        Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($produk->carousels as $index => $carousel)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($produk->carousels as $index => $carousel)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{ asset($carousel->foto) }}" alt="{{ $carousel->alt_text }}">
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-custom-icon" aria-hidden="true">
                                    <i class="fas fa-chevron-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-custom-icon" aria-hidden="true">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA</dt>
                    <dd>{{ $produk->nama_motif }}</dd>
                    <dt class="font-weight-bold">HAK CIPTA</dt>
                    <dd>{{ $produk->hak_cipta }}</dd>
                    <dt class="font-weight-bold">WARNA</dt>
                    <dd>{{ $produk->warna }}</dd>
                    <dt class="font-weight-bold">LEBAR KAIN</dt>
                    <dd>{{ $produk->lebar_kain }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">JENIS PRODUK</dt>
                    <dd>{{ $produk->jenis_produk }}</dd>
                    <dt class="font-weight-bold">CARA PERAWATAN</dt>
                    <dd>{{ $produk->cara_perawatan }}</dd>
                    <dt class="font-weight-bold">DESKRIPSI</dt>
                    <dd>{{ $produk->deskripsi }}</dd>
                </div>
            </div>
        </div>
    </div>
</x-app>