@extends('layout.master')
@section('tittle', 'Halaman Jadwal Kuliah')
@section('content')
<h3>Tambah Jadwal Kuliah</h3>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('jk.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="hari" class="form-label">Hari</label>
                    <select class="form-select" id="hari" name="hari" required>
                        <option value="">-- Pilih Hari --</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jam" class="form-label">Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam" required>
                </div>

                <div class="mb-3">
                    <label for="dosen_id" class="form-label">ID Dosen</label>
                    <input type="number" class="form-control" id="dosen_id" name="dosen_id" required>
                </div>

                <div class="mb-3">
                    <label for="matkul_id" class="form-label">ID Matakuliah</label>
                    <input type="number" class="form-control" id="matkul_id" name="matkul_id" required>
                </div>

                <div class="mb-3">
                    <label for="ruang_id" class="form-label">ID Ruangan</label>
                    <input type="number" class="form-control" id="ruang_id" name="ruang_id" required>
                </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
         <a href="{{ route('jk-data') }}" class="btn btn-secondary">Batal</a>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
