@extends('layout.master')
@section('title', 'Halaman Dosen')
@section('content')
<div class="container">
    <h3>Edit Dosen</h3>
<div class="card">
  <div class="card-body">
    <form action="{{ route('dsn.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" value="{{ $data->nama_dosen }}" required>
        </div>
        <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="intenger" name="nidn" class="form-control" value="{{ $data->nidn }}" required>
        </div>

       <div class="mb-3">
            <label for="bidang" class="form-label">Bidang</label>
             <select id="bidangdosen" name="bidang" class="form-select" required>
            <option value="" disabled selected>-- Pilih Bidang --</option>
            <option value="Pengajaran">Pengajaran</option>
            <option value="Penelitian">Penelitian</option>
            <option value="Pengabdian Kepada Masyarakat">Pengabdian Kepada Masyarakat</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dsn-data') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
</div>
@endsection
