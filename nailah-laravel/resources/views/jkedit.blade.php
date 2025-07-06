@extends('layout.master')
@section('title', 'Halaman Jadwal Kuliah')
@section('content')
<h3>Edit Jadwal Kuliah</h3>

<div class="card">
    <div class="card-body">
        <form action="{{ route('jk.update', $jadwal_kuliah->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="hari" class="form-label">Hari</label>
                <select class="form-select" id="hari" name="hari" required>
                    <option value="">-- Pilih Hari --</option>
                    @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'] as $hari)
                        <option value="{{ $hari }}" {{ $jadwal_kuliah->hari == $hari ? 'selected' : '' }}>{{ $hari }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="time" class="form-control" id="jam" name="jam" value="{{ $jadwal_kuliah->jam }}" required>
            </div>

            <div class="mb-3">
                <label for="dosen_id" class="form-label">ID Dosen</label>
                <input type="number" class="form-control" id="dosen_id" name="dosen_id" value="{{ $jadwal_kuliah->dosen_id }}" required>
            </div>

            <div class="mb-3">
                <label for="matkul_id" class="form-label">ID Matakuliah</label>
                <input type="number" class="form-control" id="matkul_id" name="matkul_id" value="{{ $jadwal_kuliah->matkul_id }}" required>
            </div>

            <div class="mb-3">
                <label for="ruang_id" class="form-label">ID Ruangan</label>
                <input type="number" class="form-control" id="ruang_id" name="ruang_id" value="{{ $jadwal_kuliah->ruang_id }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="{{ route('jk-data') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
