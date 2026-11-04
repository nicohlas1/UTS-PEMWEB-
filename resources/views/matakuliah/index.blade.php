<!DOCTYPE html>
<html lang="id">
<head>
    <title>CRUD Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Mata Kuliah</h2>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">+ Tambah Mata Kuliah</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mataKuliah as $index => $mk)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mk->kode }}</td>
                <td>{{ $mk->nama_matakuliah }}</td>
                <td>
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>