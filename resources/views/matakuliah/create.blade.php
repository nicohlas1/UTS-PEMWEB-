<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tambah Mata Kuliah</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('matakuliah.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kode</label>
                            <input type="text" name="kode" class="form-control" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">Nama Mata Kuliah</label>
                            <input type="text" name="nama_matakuliah" class="form-control" required>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>