<?php
$this->extend('layout/admin_template');
$this->section('admin'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item ">News</li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="p-3">
        <form action="<?= base_url('/news/save') ?>" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea id="summernote" name="editordata"></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imageFile" onchange="tampilkanGambar()" accept="image/*">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
            </div>
            <div class="form-group" id="previewContainer" style="display: none;">
                <label for="previewImage">Pratinjau Gambar:</label>
                <img src="" alt="Pratinjau Gambar" class="img-thumbnail" id="previewImage" style="width: 300px; height: 200px;">
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
    <!-- /.content-header -->
</div>
<script>
    function tampilkanGambar() {
        var input = document.getElementById('imageFile');
        var previewContainer = document.getElementById('previewContainer');
        var previewImage = document.getElementById('previewImage');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Setel atribut src elemen img dengan data URL gambar yang diunggah
                previewImage.src = e.target.result;
                // Tampilkan pratinjau container
                previewContainer.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php $this->endSection(); ?>