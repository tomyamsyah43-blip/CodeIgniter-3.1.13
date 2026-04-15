<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Anggota</h1>

    <form action="<?= base_url('anggota/simpan') ?>" method="post">

        <div class="form-group">
            <label>No Anggota</label>
            <input type="text" name="no_anggota" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>