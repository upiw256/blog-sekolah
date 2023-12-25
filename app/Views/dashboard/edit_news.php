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

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<?php $this->endSection(); ?>