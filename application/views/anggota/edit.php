<div class="container-fluid">
    <h3>Edit Data Anggota</h3>

    <form method="post" action="<?= base_url('anggota/update') ?>">
        <input type="hidden" name="id" value="<?= $anggota->id ?>">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $anggota->nama ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= $anggota->alamat ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telepon" value="<?= $anggota->telepon ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="<?= $anggota->email ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('anggota') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>