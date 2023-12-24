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
          $warna = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-warning','bg-info'];      
    ?>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
              <?=$news->title?>
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="/admin/news/update" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputTitle">Judul</label>
                  <input type="text" class="form-control mb-3" name="title" value="<?=$news->title?>">
                  <label for="exampleInputContent">Isi Berita</label>
                  <textarea id="summernote" name="content">
                    <?=$news->content?>
                  </textarea>
                  <label for="exampleInputFile"> Upload Gambar</label>
                  <div class="input-group">
                    <div class="costum-file">
                      <input class="custom-file-input" type="file" name="img" id="fileInput" accept="image/*">
                      <label class="custom-file-label" for="exampleInputFile" id="titleImage"></label>
                      <img id="preview" class="mt-3" src="<?=$news->img?>" alt="Image Preview" hight=200 width=200>
                      <button clasa="btn btn-danger" type="button" id="removeButton">x</button>
                    </div>
                    <script>
                      // Select the input element
                    const input = document.querySelector('input[type="file"]');
                    // Select the image element
                    const img = document.getElementById('preview');

                    const label = document.getElementById("titleImage");

                    const removeButton = document.querySelector('#removeButton');
                    // Listen for changes to the input element
                    input.addEventListener('change', (event) => {
                      // Get the file that was selected
                      const file = event.target.files[0];
                      console.log(file);
                      label.innerText = file.name;
                      // Create a new FileReader object
                      const reader = new FileReader();

                      // Listen for the 'load' event on the FileReader
                      reader.addEventListener('load', (event) => {
                        // Update the src attribute of the img element
                        img.src = event.target.result;
                      });

                      // Read the file as data URL
                      reader.readAsDataURL(file);
                    });
                    removeButton.addEventListener('click', () => {
                      // Clear the src attribute of the img element
                      img.src = "";
                      label.innerText = "";
                      // Clear the input value
                      input.value = null;
                    });
                    </script>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->endSection(); ?>