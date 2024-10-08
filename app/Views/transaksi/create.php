<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Tambah Transaksi</h2>
        <form method="post" action="/transaksi/store">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <select class="form-control" id="id_anggota" name="id_anggota" required>
                    <?php foreach($anggota as $a): ?>
                    <option value="<?= $a['id_anggota']; ?>"><?= $a['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_simpanan">Jenis Simpanan</label>
                <select class="form-control" id="jenis_simpanan" name="jenis_simpanan" required>
                    <option value="simpanan_wajib">Simpanan Wajib</option>
                    <option value="simpanan_pokok">Simpanan Pokok</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <button type="submit" class="btn btn-custom btn-block">Simpan</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
