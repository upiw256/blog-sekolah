<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<form id="search-form" class="relative rounded-md shadow-sm ml-3 mt-3 mr-3" action="/news/cari" method="get">
    <input id="keyword" name="cari" class="form-input py-2 pl-10 block w-full leading-5 rounded-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Cari...">
    <button class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none" type="submit">
        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
    </button>
</form>
<div class="flex flex-col text-gray-300">
    <div class="flex flex-col md:flex-row">
        <div class="w-screen p-2">
            <div class="flex flex-col ">
            
                <?php
                foreach ($news as $n) :
                ?>

                    <div class="flex-1 " id="news-container">
                        <!-- card -->
                        <div class="mb-3 bg-orange-700 rounded overflow-hidden shadow-lg md:flex md:items-center">
                            <div class="relative w-full h-64 lg:w-64">
                                <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?= $n['img'] ?>" alt="Image in frame">
                            </div>
                            <div class="px-6 py-4 md:w-2/3">
                                <div class="font-bold text-xl mb-2"><?= $n['title'] ?></div>
                                    <?= substr($n['content'], 0, 250) . '...' ?>
                                <a href="/news/read/<?= $n['id'] ?>" class="bg-orange-500 shadow rounded p-1 text-sm">Read More</a>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="w-full text-center flex justify-center">
                <?php
                if ($pager != null) {
                    echo $pager->links();
                }
                ?>
            </div>

        </div>
        <?php $this->endSection(); ?>