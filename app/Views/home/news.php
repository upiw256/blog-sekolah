<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<div class="m-3 rounded overflow-y-scroll scroll-smooth hover:scroll-auto shadow-lg bg-orange-700 p-3">
  <div class="h-screen flex flex-col lg:flex-row item-center text-gray-300">
    <img class="h-full lg:w-2/4" src="<?= $news->img ?>" alt="Gambar">
    <div class="px-6 py-4">
      <?php
      $date = date_create($news->created_at);
      ?>
      <div class="font-bold text-xl lg:text-3xl mb-2 text-center"><?= $news->title ?></div>
      <div class="flex flex-col mb-2">

        <span class="inline-block text-sm bold italic font-semibold mr-2"><?= $news->author ?></span>
        <span class="inline-block text-xs italic font-semibold mr-2"><?= date_format($date, "d F Y"); ?></span>
      </div>
      <p class="text-base text-justify">
        <?= $news->content ?>
      </p>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>