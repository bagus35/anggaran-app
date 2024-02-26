@extends('admin.layout.main')

@section('content')
    <div class="container mt-5">
        <h2>Edit Data Sasaran</h2>

        <!-- Form Edit Data -->
        <form action="{{ route('admin.sasaran.update', $sasaran->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Sasaran</label>
                <input type="text" class="form-control" id="nama" name="nama_sasaran" value="{{ $sasaran->nama_sasaran }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection