@extends('layout.master')
@section('tittle', 'Halaman Jadwal Kuliah')
@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0" style="color: var(--dark-brown);">
            <i class="bi bi-person-badge"></i> Data Jadwal Kuliah
        </h3>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Daftar Jadwal Kuliah</span>
                <a href="{{ url('jk-insert') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Jadwal Kuliah
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam</th>
                            <th scope="col">ID Dosen</th>
                            <th scope="col">ID Matakuliah</th>
                            <th scope="col">ID Ruangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($semuaData->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data Jadwal Kuliah.</td>
                            </tr>
                        @else
                            @foreach($semuaData as $ambilDatanya)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ambilDatanya['hari'] }}</td>
                                    <td>{{ $ambilDatanya['jam'] }}</td>
                                    <td>{{ $ambilDatanya['dosen_id'] }}</td>
                                    <td>{{ $ambilDatanya['matkul_id'] }}</td>
                                    <td>{{ $ambilDatanya['ruang_id'] }}</td>
                                    <td>
                                        <a href="{{ url('jk-edit/' . $ambilDatanya['id']) }}" class="btn btn-sm btn-secondary me-1">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ url('jk-delete/' . $ambilDatanya['id']) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
