<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="row">
    <div class="col-md-3">
        <a href="blog/add" class="btn btn-primary">Tambah Blog</a>
    </div>
    <div class="row">
        <div class="col-md-9">
        </div>
        <div class="col-md-2">
            <form action="" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" id="basicInput" placeholder="search" name="search">
                </div>
        </div>
        <div class="col-md-1" style="margin-left: -15px;">
            <button type="submit" class="btn btn-primary" name="submit">Cari</button>
        </div>
        </form>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Author</th>
            <th scope="col" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php $i = 1; ?>
            <?php foreach ($adminblog as $a) : ?>
                <th scope="row" style="text-align: center; vertical-align:middle"><?= $i++; ?></th>
                <td><?= $a['judul']; ?></td>
                <td><?= $a['author']; ?></td>
                <td>
                    <div class="Aksi">
                        <center>
                            <a href="/admin/blog/edit/<?= $a['id']; ?>" class="btn btn-warning">Edit</a>
                            <form action="/admin/blog/<?= $a['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Data Ingin Dihapus???')">Delete</button>
                            </form>
                        </center>

                    </div>
                </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
<?= $pager->links('blog', 'blog_pagination'); ?>
<?= $this->endSection(); ?>