@extends('layout.master')

@section('title', 'Halaman Ruangan')

@section('content')
<h3>Edit Ruangan</h3>

<div class="card">
    <div class="card-body">
        <form action="{{ route('ruang.update', $ruang->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_ruang" class="form-label">Nama Ruangan</label>
                <input type="varchar" name="nama_ruang" class="form-control @error('nama_ruang') is-invalid @enderror" value="{{ old('nama_ruang', $ruang->nama_ruang) }}" placeholder="Masukkan nama ruangan">
                @error('nama_ruang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lantai" class="form-label">Lantai</label>
                <input type="number" name="lantai" class="form-control @error('lantai') is-invalid @enderror" value="{{ old('lantai', $ruang->lantai) }}" placeholder="Masukkan lantai ruangan">
                @error('lantai')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="{{ route('ruang-data') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
