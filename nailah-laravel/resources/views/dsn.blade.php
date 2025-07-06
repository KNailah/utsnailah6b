@extends('layout.master')

@section('title', 'Halaman Dosen')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0" style="color: var(--dark-brown);">
            <i class="bi bi-person-badge"></i> Data Dosen
        </h3>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Daftar Dosen</span>
                <a href="{{ url('dsn-insert') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Dosen
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Bidang</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($semuaData->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data dosen.</td>
                            </tr>
                        @else
                            @foreach($semuaData as $ambilDatanya)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ambilDatanya['nama_dosen'] }}</td>
                                    <td>{{ $ambilDatanya['nidn'] }}</td>
                                    <td>{{ $ambilDatanya['bidang'] }}</td>
                                    <td>
                                        <a href="{{ url('dsn-edit/' . $ambilDatanya['id']) }}" class="btn btn-sm btn-secondary me-1">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ url('dsn-delete/' . $ambilDatanya['id']) }}" method="POST" class="d-inline">
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
