<?php if($kategori): ?>

<form method="post" action="<?= base_url('kategori/update/'.$kategori->id); ?>">

    <label>Nama Kategori</label>
    <input type="text" name="nama_kategori"
           value="<?= $kategori->nama_kategori; ?>" required>

    <button type="submit">Update</button>
</form>

<?php else: ?>
    <p>Data tidak ditemukan</p>
<?php endif; ?>