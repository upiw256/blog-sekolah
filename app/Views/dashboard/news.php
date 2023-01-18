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
              <?php
              if (session()->get('error')) {?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  <?= session()->get('error')?>
                </div>
              <?php } ?>
              <?php
              if (session()->get('message')) {?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  <?= session()->get('message')?>
                </div>
              <?php }
              ?>
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
                              <button onclick="executeExample()" class="btn btn-none text-danger">
                                  <i class="fas fa-trash"></i>
                                  <p>Hapus</p>
                              </button>
                            </div>
                        </div>
                    </td>
                  </tr>
                  <script>
                    
                    function executeExample() {
                      const swalWithBootstrapButtons = Swal.mixin({
                          customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                          },
                          buttonsStyling: false
                        })

                        swalWithBootstrapButtons.fire({
                          title: 'Are you sure?',
                          text: "You won't be able to revert this!",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonText: 'Yes, delete it!',
                          cancelButtonText: 'No, cancel!',
                          reverseButtons: true
                        }).then((result) => {
                          if (result.isConfirmed) {
                            swalWithBootstrapButtons.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            )
                            window.location.href = "<?= base_url("/admin/news?delete=".base64_encode($n['id'])) ?>";
                          } else if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.cancel
                          ) {
                            swalWithBootstrapButtons.fire(
                              'Cancelled',
                              'Your imaginary file is safe :)',
                              'error'
                            )
                          }
                        })
                      }
                    
                  </script>
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