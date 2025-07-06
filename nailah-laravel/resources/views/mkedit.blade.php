@extends('layout.master')

@section('title', 'Halaman Mata Kuliah')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0" style="color: var(--dark-brown);">
            <i class="bi bi-pencil-square"></i> Edit Mata Kuliah
        </h3>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('mk.update', $matakuliah->id) }}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="nama_matakuliah" class="form-control @error('nama_matakuliah') is-invalid @enderror" value="{{ old('nama_matakuliah', $matakuliah->nama_matakuliah) }}">
                    @error('nama_matakuliah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kode" class="form-label">Kode Mata Kuliah</label>
                    <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode', $matakuliah->kode) }}">
                    @error('kode')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="number" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks', $matakuliah->sks) }}">
                    @error('sks')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="dosen_id" class="form-label">ID Dosen</label>
                    <input type="number" name="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror" value="{{ old('dosen_id', $matakuliah->dosen_id) }}">
                    @error('dosen_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Perbarui Data
                </button>
                <a href="{{ route('mk-data') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
