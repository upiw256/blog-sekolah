<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<div class="flex flex-col sm:flex-row justify-evenly mt-3">
    <?php
    $colors = array('blue','indigo','teal','green', 'emerald','violet');
    
    ?>
    <div class="bg-<?= $colors[rand(0,5)] ?>-<?= rand(4,9) ?>00 text-white rounded-lg p-4 shadow-md mb-3 sm:w-1/5">
      <h2 class="text-2xl font-bold">Jumlah Siswa</h2>
      <p class="text-xs font-thin text-red-400">*Yang terdata didapodik</p>
      <p class="text-4xl font-bold">Nilai Statistik</p>
    </div>
    <div class="bg-<?= $colors[rand(0,3)] ?>-<?= rand(4,9) ?>00 text-white rounded-lg p-4 shadow-md mb-3 sm:w-1/5">
      <h2 class="text-2xl font-bold">Jumlah Guru</h2>
      <p class="text-xs font-thin text-red-400">*Yang terdata didapodik</p>
      <p class="text-4xl font-bold">Nilai Statistik</p>
    </div>
    <div class="bg-<?= $colors[rand(0,3)] ?>-<?= rand(4,9) ?>00 text-white rounded-lg p-4 shadow-md mb-3 sm:w-1/5">
      <h2 class="text-2xl font-bold">Jumlah Rombongan Belajar</h2>
      <p class="text-xs font-thin text-red-400">*Yang terdata didapodik</p>
      <p class="text-4xl font-bold">Nilai Statistik</p>
    </div>
    <div class="bg-<?= $colors[rand(0,3)] ?>-<?= rand(4,9) ?>00 text-white rounded-lg p-4 shadow-md mb-3 sm:w-1/5">
      <h2 class="text-2xl font-bold">Jumlah Tendik</h2>
      <p class="text-xs font-thin text-red-400">*Yang terdata didapodik</p>
      <p class="text-4xl font-bold">Nilai Statistik</p>
    </div>
</div>
<div class="bg-orange-700 text-white rounded-lg p-4 shadow-md m-3">
      <h2 class="text-2xl font-bold">SMAN 1 Margaasih</h2>
      <p class="text-xs font-thin text-red-400">*Yang terdata didapodik</p>
      <div class="flex flex-col">
        <p>Nama Sekolah: <?= $sekolah->rows->nama ?></p>
        <p>NPSN: <?= $sekolah->rows->npsn ?></p>
        <p>NSS: <?= $sekolah->rows->nss ?></p>
        <p>Alamat: <?= $sekolah->rows->alamat_jalan.' RT: 0'.$sekolah->rows->rt.' / 0'.$sekolah->rows->rw.' Desa '. $sekolah->rows->desa_kelurahan.' '.$sekolah->rows->kecamatan.' '.$sekolah->rows->kabupaten_kota?></p>

    </div>
    </div>

<?php $this->endSection(); ?>