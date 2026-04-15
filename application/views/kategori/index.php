<h3 class="mb-4">Data Kategori</h3>

<a href="<?= base_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">
    + Tambah Kategori
</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th width="200">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($kategori as $k): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $k->nama_kategori; ?></td>
            <td>
                <a href="<?= base_url('kategori/edit/'.$k->id); ?>" class="btn btn-warning btn-sm">Edit</a>

                <a href="<?= base_url('kategori/hapus/'.$k->id); ?>"
                   onclick="return confirm('Yakin hapus data?')"
                   class="btn btn-danger btn-sm">
                   Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>