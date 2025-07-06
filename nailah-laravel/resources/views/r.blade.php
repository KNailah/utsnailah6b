@extends('layout.master')

@section('title', 'Halaman Ruangan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0" style="color: var(--dark-brown);">
            <i class="bi bi-building"></i> Data Ruangan
        </h3>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Daftar Ruangan</span>
                <a href="{{ url('ruang-insert') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Ruangan
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Ruang</th>
                            <th scope="col">Lantai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($semuaData->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data Ruangan.</td>
                            </tr>
                        @else
                            @foreach($semuaData as $ruang)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ruang->nama_ruang }}</td>
                                    <td>{{ $ruang->lantai }}</td>
                                    <td>
                                        <a href="{{ url('ruang-edit/' . $ruang->id) }}" class="btn btn-sm btn-secondary me-1">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ url('ruang-delete/' . $ruang->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus ruangan ini?')">
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
