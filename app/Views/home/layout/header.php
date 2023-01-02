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
  margin: 0 4px;
}

.pagination li.active {
  background-color: #c2410c;
  color: white;
  border: 1px solid #c2410c;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
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