<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Anggota</h1>

    <a href="<?= base_url('anggota/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

    <table class="table table-bordered" id="dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>No Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($anggota as $a){ ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $a->no_anggota ?></td>
                <td><?= $a->nama ?></td>
                <td><?= $a->alamat ?></td>
                <td><?= $a->telepon ?></td>
                <td><?= $a->email ?></td>
                <td><?= $a->status ?></td>
                <td>
    <a href="<?= base_url('anggota/edit/'.$a->id) ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="<?= base_url('anggota/hapus/'.$a->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>