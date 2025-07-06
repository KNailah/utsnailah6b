@extends('layout.master')

@section('title', 'Halaman Mata Kuliah')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0" style="color: var(--dark-brown);">
            <i class="bi bi-book"></i> Data Mata Kuliah
        </h3>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Daftar Mata Kuliah</span>
                <a href="{{ url('mk-insert') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Mata Kuliah
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">Kode Mata Kuliah</th>
                            <th scope="col">SKS</th>
                            <th scope="col">ID Dosen</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($semuaData->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data Mata Kuliah.</td>
                            </tr>
                        @else
                            @foreach($semuaData as $ambilDatanya)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ambilDatanya->nama_matakuliah }}</td>
                                    <td>{{ $ambilDatanya->kode }}</td>
                                    <td>{{ $ambilDatanya->sks }}</td>
                                    <td>{{ $ambilDatanya->dosen_id }}</td>
                                    <td>
                                        <a href="{{ url('mk-edit/' . $ambilDatanya->id) }}" class="btn btn-sm btn-secondary me-1">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ url('mk-delete/' . $ambilDatanya->id) }}" method="POST" class="d-inline">
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
