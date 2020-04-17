@extends('layout/main')
@section('title', 'Daftar Mahasiswa Baru')
@section('container')
<div class="container">

    <div class="row">
        <div class="col-6">
            <h1 class="mt-10">Tambah Data Mahasiswa Baru</h1>
            <form>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email">
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan">
  </div>
  <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>
        </div>
    </div>
</div>
@endsection