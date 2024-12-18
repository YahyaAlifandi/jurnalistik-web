<?php

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    body {
        font-family: poppins;
    }
  </style>
</head>
<body class="bg-zinc-50">
    <div class="flex h-screen max-h-screen">
        <div class="flex items-center py-3 px-5 fixed bg-white m-5 rounded-lg shadow-lg z-10">
            <button id="menu-toggle" class="text-blue-950 text-3xl">
                <i class="bi bi-list"></i>
            </button>
        </div>
        <div id="sidebar" class="bg-zinc-50 p-5 shadow-md w-64 z-10 transform -translate-x-full transition-transform duration-300 ease-in-out md:translate-x-0 h-screen fixed md:relative">
            <h1 class="text-2xl font-bold mb-7 text-center text-blue-950">Xionnary</h1>
            <ul class="space-y-3 text-sm items-center">
                <li class="bg-violet-600 px-5 py-3 rounded-xl shadow-md text-white font-semibold"><i class="bi bi-house mr-2"></i> <a href="index.html">Home</a></li>
                <li class="px-5 py-3 hover:text-violet-600 rounded text-gray-400 font-semibold"><i class="bi bi-info-circle mr-2"></i> <a href="update-about.html">About</a></li>
                <li class="px-5 py-3 hover:text-violet-600 rounded text-gray-400 font-semibold"><i class="bi bi-people mr-2"></i><a href="update-data-siswa.html">Data Siswa</a></li>
                <li class="px-5 py-3 hover:text-violet-600 rounded text-gray-400 font-semibold"> <i class="bi bi-envelope mr-2"></i> <a href="contact-us.html">Contact</a></li>
            </ul>
        </div>
        <div class="container flex flex-col gap-5">
            <div class="title flex md:flex-row flex-col text-center px-10 py-5 mb-10 md:mb-10 z-0 justify-between">
                <h1 class="text-3xl font-semibold">Jurnalistik</h1>
                <h2 class="text-2xl font-medium">Dashboard</h2>
            </div>
            <div id="content" class="bg-zinc-50 w-full max-h-screen mt-5 md:mt-0 z-0">
                <div class="card-leader flex flex-col justify-center items-center md:h-[75vh] h-[90vh]">
                    <h1 class="text-2xl -mb-5 md:mb-10 font-semibold bg-violet-600 text-white px-7 py-3 rounded-lg bg-gradient-to-r from-violet-500 to-blue-500 duration-300 hover:px-10 hover:scale-105">LeaderShip</h1>
                    <div class="card-container flex-row gap-4 md:mt-0 mt-10">
                        <div class="card flex gap-4 flex-col md:flex-row gap-y-5 mb-10">
                            <div id="card" class="min-w-56 max-w-56 mx-auto bg-gradient-to-r from-violet-500 to-purple-600 rounded-2xl shadow-lg overflow-hidden transform transition duration-700 hover:scale-105 translate-y-20 opacity-0 ease-in-out hover:duration-300">
                                <div class="relative">
                                    <img class="w-full h-48 object-cover opacity-90" src="https://via.placeholder.com/150" alt="Profile Image">
                                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-30"></div>
                                    <div class="absolute bottom-0 left-0 p-4">
                                        <h2 class="text-white text-2xl font-bold drop-shadow-lg">db_nama</h2>
                                        <p class="text-gray-200 text-sm drop-shadow-lg">db_jabatan</p>
                                    </div>
                                </div>
                                
                                <div class="p-6 bg-white rounded-b-2xl">
                                    <p class="text-gray-700 text-center font-semibold">db_role</p>
                                    <button class="mt-4 w-full bg-violet-500 hover:bg-violet-600 text-white py-2 rounded-lg font-medium transition duration-200">View Profile</button>
                                </div>
                            </div>                        
                            <div id="card2" class="min-w-56 max-w-56 mx-auto bg-gradient-to-r from-violet-500 to-purple-600 rounded-2xl shadow-lg overflow-hidden transform transition duration-700 hover:scale-105 translate-y-20 opacity-0 ease-in-out delay-100 hover:duration-300">
                                <div class="relative">
                                    <img class="w-full h-48 object-cover opacity-90" src="https://via.placeholder.com/150" alt="Profile Image">
                                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-30"></div>
                                    <div class="absolute bottom-0 left-0 p-4">
                                        <h2 class="text-white text-2xl font-bold drop-shadow-lg">db_nama</h2>
                                        <p class="text-gray-200 text-sm drop-shadow-lg">db_jabatan</p>
                                    </div>
                                </div>
                                
                                <div class="p-6 bg-white rounded-b-2xl">
                                    <p class="text-gray-700 text-center font-semibold">db_role</p>
                                    <button class="mt-4 w-full bg-violet-500 hover:bg-violet-600 text-white py-2 rounded-lg font-medium transition duration-200">View Profile</button>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const card = document.getElementById('card');
    const card2 = document.getElementById('card2');
    window.onload = function() {
        card.classList.add('translate-y-0');
        card.classList.remove('translate-y-10');
        card.classList.add('opacity-1');
        card.classList.remove('opacity-0');

        card2.classList.add('translate-y-0');
        card2.classList.remove('translate-y-10');
        card2.classList.add('opacity-1');
        card2.classList.remove('opacity-0');
    }
    const menu_toggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    function openSidebar() {
        sidebar.classList.add('translate-x-0');
        sidebar.classList.remove('-translate-x-full');
        document.addEventListener('click', closeSidebarOnOutsideClick);
    };
    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        sidebar.classList.remove('translate-x-0');
        document.addEventListener('click', closeSidebarOnOutsideClick);
    }
    function closeSidebarOnOutsideClick(event) {
        if (!sidebar.contains(event.target) && !menu_toggle.contains(event.target)) {
            closeSidebar();
        }
    }
    menu_toggle.addEventListener('click', (event) => {
        event.stopPropagation();
        if (sidebar.classList.contains(openSidebar)) {
            closeSidebar();
        }
        else {
            openSidebar();
        }
    });
</script>
</html>