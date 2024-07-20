<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">PRODUK</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/produk/create') }}" class="float-right btn btn-dark">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <tr>
                        <th style="color: white;" width="10px" class="text-center">NO</th>
                        <th style="color: white;" width="90px" class="text-center">AKSI</th>
                        <th style="color: white;" class="text-center">NAMA</th>
                        <th style="color: white;" class="text-center">HAK CIPTA</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($list_produk->sortByDesc('created_at')->values() as $produk)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/produk" id="{{ $produk->id }}" />
                                <x-template.button.edit-button url="admin/produk" id="{{ $produk->id }}" />
                                <x-template.button.delete-button url="admin/produk" id="{{ $produk->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $produk->nama_motif }}</td>
                        <td class="text-center">{{ $produk->hak_cipta }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
