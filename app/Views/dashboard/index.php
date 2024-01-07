<?php $this->extend('layout/admin_template'); ?>
<?php $this->section('admin'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Starter Page</h1>
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
  <?php
  $warna = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-warning', 'bg-info'];
  ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box <?= $warna[rand(0, 4)] ?>">
            <span class="info-box-icon"><i class="fa fa-id-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Siswa</span>
              <span class="info-box-number">
                <?= number_format($siswa, 0, ',', '.') ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box <?= $warna[rand(0, 4)] ?>">
            <span class="info-box-icon"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kelas</span>
              <span class="info-box-number">
                <?= $kelas ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box <?= $warna[rand(0, 4)] ?>">
            <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">PTK</span>
              <span class="info-box-number">
                <?= number_format($ptk, 0, '.', '.') ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box <?= $warna[rand(0, 4)] ?>">
            <span class="info-box-icon"><i class="fas fa-comments"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Berita</span>
              <span class="info-box-number">
                <?= $news ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div>
        <button class="btn btn-primary swalDefaultSuccess syncButton"><i class="fa fa-sync-alt"></i> Syncron
          PTK</button>

        <button class="btn btn-primary swalDefaultSuccess syncButtonSiswa"><i class="fa fa-sync-alt"></i> Syncron
          Siswa</button>
      </div>
      <h1>News Update</h1>
      <div class="row mt-3">
        <?php foreach ($update as $item): ?>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header  bg-gray">
                <h3 class="card-title">
                  <?= esc($item->title) ?>
                </h3>
              </div>
              <div class="card-body">
                <!-- Add content here based on your data fields -->
                <p>
                  <?= $item->content ?>
                </p>
                <!-- Add more fields as needed -->
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php $this->endSection(); ?>