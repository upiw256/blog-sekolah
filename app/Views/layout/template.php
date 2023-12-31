<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel='shorcut icon' href="<?= base_url('assets') ?>/image/logo.png">
    <title>SMAN 1 MARGAASIH</title>
    <style>
        .pagination {
            display: flex;
            justify-content: space-between;

        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            /* border: 1px solid #ddd; */
            /* margin: 0 4px; */
        }

        .pagination li {
            background: white;
        }

        .pagination li.active {
            background-color: #c2410c;
            color: white;
            /* border: 1px solid #c2410c; */
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        /* membuat container atau wadah dari scrollbar dengan lebar 20px  */
        ::-webkit-scrollbar {
            width: 20px;
        }

        /* membuat background dari scrollbar */
        /* kasih warna transparan agar lebih estetik  */
        ::-webkit-scrollbar-track {
            background-color: transparent;
        }


        /* membuat styling pada batang atau bar scrollbar  */
        /* kita beri warna abu tua dengan lengkungan di sisi atas dan bawahnya  */
        ::-webkit-scrollbar-thumb {
            background-color: #d6dee1;
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;
        }

        /* warna akan berubah menjadi abu mudah saat kursor diarahkan  */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #a8bbbf;
        }
    </style>
</head>

<body class="bg-blue-300">
    <nav class="bg-blue-500 text-white">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <div class="flex items-center">
                <a href="/" class="flex flex-row ">
                    <img src="<?= base_url('assets') ?>/image/logo.png" alt="Logo" class="w-8 h-8 mr-4">
                    <h1 class="sm:text-xl">SMAN 1 MARGAASIH</h1>
                </a>
            </div>
            <div class="block sm:hidden">
                <button
                    class="flex items-center px-3 py-2 rounded-md text-white hover:text-white focus:outline-none focus:text-white"
                    id="menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="hidden sm:block" id="menu">
                <div class="flex flex-col sm:flex-row">
                    <a href="/"
                        class="px-3 py-2 rounded-md text-sm font-medium leading-5 hover:text-white focus:outline-none focus:text-white transition duration-150 ease-in-out">Home</a>
                    <a href="/news"
                        class="px-3 py-2 rounded-md text-sm font-medium leading-5 hover:text-white focus:outline-none focus:text-white transition duration-150 ease-in-out">News</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- conten -->
    <?= $this->renderSection('content') ?>
    <!-- end conten -->
    <div class=" w-5/4 p-2 mb-5 text-white">
        <div class="flex justify-center">
            <div class="cols-span-2 md:col-span-1">
                <div class="bg-blue-700 rounded overflow-hidden shadow-lg md:flex md:items-center">
                    <div class="sm:ml-2 relative w-full h-64 lg:w-64">
                        <img class="absolute top-0 left-0 w-full h-full object-cover"
                            src="<?= base_url('assets') ?>/image/kepsek.png" alt="Image in frame">
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

    <div class="relative mt-10">
        <div class="fixed bottom-0">
            <div class="bg-blue-500 w-screen text-white flex justify-center h-10">
                <?= date("Y"); ?> &copy; SMAN 1 Margaasih
            </div>
        </div>
    </div>

    </div>
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.getElementById('menu-button');
            const menu = document.getElementById('menu');
            const hamburgerIcon = menuButton.querySelector('svg:first-child');
            const closeIcon = menuButton.querySelector('svg:last-child');

            menuButton.addEventListener('click', function () {
                menu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>