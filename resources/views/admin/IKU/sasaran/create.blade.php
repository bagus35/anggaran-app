@extends('admin.layout.main')

@section('content')
<div class="container mt-5">
    <h2>Tambah Data Sasaran</h2>

    <!-- Form Tambah Data -->
    <form action="{{ route('admin.sasaran.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Sasaran</label>
            <input type="text" class="form-control" id="nama" name="nama_sasaran" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection