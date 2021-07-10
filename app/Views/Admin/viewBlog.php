<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Blog ID</th>
                    <th scope="col">Judul</th> 
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $i=1; ?>
                    <?php foreach($adminblog as $a): ?>
                    <th scope="row"><?= $i++;?></th>
                    <td><?= $a['judul'];?></td>
                    <td></td>
                </tr>
                    <?php endforeach; ?>
                    
            </tbody>
            </table>
            <center><a href="blog/add" class="btn btn-success">Tambah Data</a></center>
<?= $this->endSection(); ?>