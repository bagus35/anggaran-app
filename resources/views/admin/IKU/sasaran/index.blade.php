@extends('admin.layout.main')

@section('content')
<div class="container mt-5">
    <h2>Admin Page Sasaran</h2>

    <!-- Tabel Sasaran -->
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Sasaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sasarans as $sasaran)
                <tr>
                    <td>{{ $sasaran->id }}</td>
                    <td>{{ $sasaran->nama_sasaran }}</td>
                    <td>
                        <a href="{{ route('admin.sasaran.edit', $sasaran->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tombol Tambah -->
    <a href="{{ route('admin.sasaran.create') }}" class="btn btn-success">Tambah Data</a>
</div>
@endsection