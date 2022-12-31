<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <style>
        .pagination {
            display: inline-flex;
        }

        .pagination li {
            list-style: none;
        }

        .pagination a {
            display: inline-block;
            min-width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 50%;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
        }

        .pagination a.current {
            background: #333;
            color: #fff;
        }

        .pagination a:hover {
            background: #333;
            color: #fff;
        }
    </style>
</head>

<body class="bg-orange-300">
    <nav class="bg-orange-500 text-white">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <div class="flex items-center">
                <img src="<?= base_url('assets') ?>/image/logo.png" alt="Logo" class="w-8 h-8 mr-4">
                <h1 class="sm:text-xl">SMAN 1 MARGAASIH</h1>
            </div>
            <div class="block sm:hidden">
                <button class="flex items-center px-3 py-2 rounded-md text-white hover:text-white focus:outline-none focus:text-white" id="menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden sm:block" id="menu">
                <div class="flex flex-col sm:flex-row">
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium leading-5 hover:text-white focus:outline-none focus:text-white transition duration-150 ease-in-out">Home</a>
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium leading-5 hover:text-white focus:outline-none focus:text-white transition duration-150 ease-in-out">News</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex flex-col text-gray-300">
        <div class="flex flex-col md:flex-row">
            <div class=" md:w-4/5 w-screen  p-2">
                <div class="flex flex-col ">
                    <?php foreach ($news as $n) : ?>
                        <div class="flex-1 " id="news-container">
                            <!-- card -->
                            <div class="mb-3 bg-orange-700 rounded overflow-hidden shadow-lg md:flex md:items-center">
                                <div class="relative w-full h-64 lg:w-64">
                                    <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?= $n['img'] ?>" alt="Image in frame">
                                </div>
                                <div class="px-6 py-4 md:w-2/3">
                                    <div class="font-bold text-xl mb-2"><?= $n['title'] ?></div>
                                    <p class=" text-base">
                                        <?= $n['content'] ?>
                                    </p>
                                    <a href="#" class="bg-orange-500 shadow rounded p-1 text-sm">Read More</a>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="w-full text-center flex justify-center">
                    <?= $pager->links() ?>
                    <?= $pager->simpleLinks() ?>
                </div>

            </div>
            <div class=" md:w-2/5 w-screen p-2 mb-5">
                <div class="flex justify-center">
                    <div class="cols-span-2 md:col-span-1">
                        <div class="bg-orange-700 rounded overflow-hidden shadow-lg md:flex md:items-center">
                            <div class="sm:ml-2 relative w-full h-64 lg:w-64">
                                <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?= base_url('assets') ?>/image/kepsek.png" alt="Image in frame">
                            </div>
                            <div class="px-6 py-4 md:w-2/3 text-center">
                                <div class="font-bold text-xl mb-2 text-lg">Kepala Sekolah SMAN 1 Margaasih</div>
                                <p class=" text-sm">
                                    Drs. Ade Rohaendi, M. Si

                                </p>
                                <p class="text-base sm:text-xs">
                                    NIP. 196409101993021002

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative mt-4">
            <div class="fixed bottom-0">
                <div class="bg-orange-500 w-screen text-white flex justify-center"><?= date("Y"); ?> &copy; SMAN 1 Margaasih</div>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const menu = document.getElementById('menu');
            const hamburgerIcon = menuButton.querySelector('svg:first-child');
            const closeIcon = menuButton.querySelector('svg:last-child');

            menuButton.addEventListener('click', function() {
                menu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>