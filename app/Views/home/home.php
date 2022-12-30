<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>

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
    <div class="grid grid-rows-2">
        <div class="grid md:grid-cols-3 gap-4 grid-cols-1 text-gray-200">
            <div class="cols-span-1 md:col-span-2 p-4">
                <!-- Card -->
                <div class="mb-3 bg-orange-700 rounded overflow-hidden shadow-lg md:flex md:items-center">
                    <div class="relative w-full h-64 lg:w-64">
                        <img class="absolute top-0 left-0 w-full h-full object-cover" src="https://picsum.photos/1800/2000" alt="Image in frame">
                    </div>
                    <div class="px-6 py-4 md:w-2/3">
                        <div class="font-bold text-xl mb-2">Card title</div>
                        <p class=" text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                        </p>
                        <a href="#" class="bg-blue-500 rounded p-1 text-sm">Read More</a>
                    </div>
                </div>
                <div class="mb-3 bg-orange-700 rounded overflow-hidden shadow-lg md:flex md:items-center">
                    <div class="relative w-full h-64 lg:w-64">
                        <img class="absolute top-0 left-0 w-full h-full object-cover" src="https://picsum.photos/1800/2000" alt="Image in frame">
                    </div>
                    <div class="px-6 py-4 md:w-2/3">
                        <div class="font-bold text-xl mb-2">Card title</div>
                        <p class=" text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                        </p>
                        <a href="#" class="bg-blue-500 rounded p-1 text-sm">Read More</a>
                    </div>
                </div>


                <!-- end card -->
            </div>
            <div class="cols-span-2 md:col-span-1 p-4">
                <div class="mb-3 bg-orange-700 rounded overflow-hidden shadow-lg md:flex md:items-center">
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

        <div class="relative">
            <div class="fixed bottom-0">
                <div class="bg-orange-500 w-screen text-white flex justify-center">asdasdsa</div>
            </div>
        </div>

    </div>
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