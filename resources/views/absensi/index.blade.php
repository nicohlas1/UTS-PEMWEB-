<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="container mt-4">
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/absensi/simpan') }}" method="POST">
        @csrf
        
        <!-- Bagian Atas: DatePicker & ComboBox -->
        <div class="row mb-4 align-items-end">
            <div class="col-md-3">
                <label class="form-label fw-bold">Tanggal Absensi</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">Mata Kuliah</label>
                <select name="mata_kuliah_id" class="form-select" required>
                    <option value="">-- Pilih Mata Kuliah --</option>
                    @foreach($mataKuliah as $mk)
                        <option value="{{ $mk->id }}">{{ $mk->nama_mk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Simpan Kehadiran
                </button>
            </div>
        </div>

        <!-- Tabel Absensi -->
        <div class="table-responsive">
            <table class="table table-hover align-middle border">
                <thead class="table-light text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th width="35%" class="text-start">Mahasiswa</th>
                        <th width="15%">Kehadiran</th>
                        <th width="45%" class="text-start">Status</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($mahasiswa as $index => $mhs)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="text-start">
                            <span class="d-block fw-bold text-uppercase">{{ $mhs->name }}</span>
                            <small class="text-muted">{{ $mhs->NIM }}</small>
                        </td>
                        <td><span class="badge bg-secondary">-</span></td>
                        <td class="text-start">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status[{{ $mhs->nim }}]" value="H" required>
                                <label class="form-check-label">H</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status[{{ $mhs->nim }}]" value="A">
                                <label class="form-check-label">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status[{{ $mhs->nim }}]" value="I">
                                <label class="form-check-label">I</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status[{{ $mhs->nim }}]" value="S">
                                <label class="form-check-label">S</label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
</div>
</body>
</html>