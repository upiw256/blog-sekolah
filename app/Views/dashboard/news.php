<?php
 $this->extend('layout/admin_template'); 
 $this->section('admin'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">News</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Isi Berita</th>
                    <th>Gambar</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  // dd($news);
                  foreach ($news as $n) :
                  ?>
                  <tr>
                    <td class="fitwidth"><?= substr($n['title'],0,20) ?></td>
                    <td class="fitwidth"><?= $n['author'] ?></td>
                    <td><?= substr($n['content'],0,50) ?>..</td>
                    <td class="fitwidth"><img src="<?= $n['img'] ?>" width="200" height="200"></td>
                    <td class="fitwidth"><?= date_format(date_create($n['created_at']),"d-m-Y H:i:s"); ?></td>
                    <td >
                        <div class="d-flex justify-content-around">
                            <div class="d-flex flex-column">
                              <a href="/admin/news/<?= base64_encode($n['id'])  ?>">
                                <i class="fas fa-edit"></i>
                                <p>Edit</p>
                              </a>
                            </div>
                           
                            <div class="d-flex flex-column">
                                <i class="fas fa-trash"></i>
                                <p>Hapus</p>
                            </div>
                        </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->endSection(); ?>