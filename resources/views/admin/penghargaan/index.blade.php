<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">PENGHARGAAN</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/penghargaan/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i>
                Tambah
                Data</a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">NAMA</th>
                    <th style=" color: white;" class="text-center">GAMBAR</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_penghargaan->sortByDesc('created_at')->values() as $penghargaan)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/penghargaan"
                                        id="{{ $penghargaan->id }}" />
                                    <x-template.button.edit-button url="admin/penghargaan"
                                        id="{{ $penghargaan->id }}" />
                                    <x-template.button.delete-button url="admin/penghargaan"
                                        id="{{ $penghargaan->id }}" />
                                </div>
                            </td>
                            <td class="text-center">{{ $penghargaan->nama }}</td>
                            <td class="text-center">
                                @if ($penghargaan->foto)
                                    <img src="{{ url($penghargaan->foto) }}" alt="{{ $penghargaan->nama }}"
                                        style="max-width: 60px; max-height: 60px;">
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
