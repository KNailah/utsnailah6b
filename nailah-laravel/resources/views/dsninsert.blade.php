@extends('layout.master')
@section('title', 'Halaman Dosen')
@section('content')
<h3>Data Dosen Baru</h3>

<div class="card">
  <div class="card-body">
    <form action="{{ route('dsn.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="InputNama" class="form-label">Nama Dosen</label>
        <input type="text" name="nama_dosen" class="form-control" id="InputNama" placeholder="Masukkan nama dosen" required>
      </div>

      <div class="mb-3">
        <label for="InputNIDN" class="form-label">NIDN</label>
        <input type="intenger" name="nidn" class="form-control" id="InputNIDN" placeholder="Masukkan NIDN" required>
      </div>

      <div class="mb-3">
        <label for="bidangdosen" class="form-label">Bidang</label>
        <select id="bidangdosen" name="bidang" class="form-select" required>
          <option value="" disabled selected>-- Pilih Bidang --</option>
          <option value="Pengajaran">Pengajaran</option>
          <option value="Penelitian">Penelitian</option>
          <option value="Pengabdian Kepada Masyarakat">Pengabdian Kepada Masyarakat</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Simpan Data</button>
      <a href="{{ route('dsn-data') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
