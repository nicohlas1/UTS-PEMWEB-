<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Edit Mata Kuliah</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kode</label>
                            <input type="text" name="kode" class="form-control" value="{{ $matakuliah->kode }}" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">Nama Mata Kuliah</label>
                            <input type="text" name="nama_matakuliah" class="form-control" value="{{ $matakuliah->nama_matakuliah }}" required>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-warning">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>