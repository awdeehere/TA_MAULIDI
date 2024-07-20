<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">TENTANG KAMI</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/tentang-kami/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i>
                Tambah
                Data</a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">JUDUL</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_tentang->sortByDesc('created_at')->values() as $tentang)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/tentang-kami" id="{{ $tentang->id }}" />
                                <x-template.button.edit-button url="admin/tentang-kami" id="{{ $tentang->id }}" />
                                <x-template.button.delete-button url="admin/tentang-kami" id="{{ $tentang->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $tentang->judul }}</td>
                        <!-- <td class="text-center">
                            <div>

                                {!! Str::limit($tentang->deskripsi, 100, '...') !!}
                            </div>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>