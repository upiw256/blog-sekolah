<?php $this->extend('home/layout/template'); ?>
<?php $this->section('content'); ?>
<div class="m-3 rounded overflow-hidden shadow-lg bg-orange-700 p-3">
<div class="flex flex-col item-center text-gray-300">
    <img class="w-full h-3/4" src="<?= $news->img ?>" alt="Gambar">
    <div class="px-6 py-4">
    <?php
$date=date_create($news->created_at);
?>
      <div class="font-bold text-xl mb-2"><?= $news->title ?></div>
      <div class="flex flex-col mb-2">

          <span class="inline-block text-sm bold italic font-semibold mr-2"><?= $news->author ?></span>
          <span class="inline-block text-xs italic font-semibold mr-2"><?= date_format($date,"d F Y"); ?></span>
      </div>
      <p class="text-base">
      <?= $news->content ?>
      </p>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>