<x-app>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL TENTANG KAMI
        </h5>
    </div>
    <a href="{{ url('admin/tentang-kami') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i>
        Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <dt class="font-weight-bold">JUDUL</dt>
                    <dd>{{ $tentang->judul }}</dd>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <dt class="font-weight-bold">DESKRIPSI</dt>
                    <textarea class="form-control" rows="10" disabled>{{ strip_tags($tentang->deskripsi) }}</textarea>
                </div>
            </div>
        </div>
    </div>
</x-app>