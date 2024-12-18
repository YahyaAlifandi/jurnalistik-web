<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
        body {
            font-family: poppins;
        }
        .sc {
            appearance: none; -webkit-appearance: none;
        }
        input[type="search"]::-webkit-search-cancel-button {
            display: none;
        }
    </style>
</head>
<body>
    <div id="card-form" class="container-lg w-full flex justify-center items-center h-screen absolute z-50 bg-black bg-opacity-80 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full md:m-0 mx-10">
            <div class="container-lg flex flex-row justify-between items-center mb-5">
                <h2 class="text-xl font-semibold">Formulir Data</h2>
                <button id="close-btn-form" class="bg-rose-600 text-white px-3 py-2 rounded-md shadow-md" ><i class="bi bi-x"></i></button>
            </div>
            <form class="space-y-4">
                <div>
                    <label for="nama" class="block text-gray-600 font-medium">Nama</label>
                    <input type="text" id="nama" name="nama" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-violet-600" placeholder="Masukkan Nama">
                </div>
                <div>
                    <label for="kelas" class="block text-gray-600 font-medium">Kelas</label>
                    <select id="role" name="role" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-violet-600">
                        <option value="">Pilih Kelas</option>
                        <?php
                            
                        ?>
                    </select>
                </div>
                <div>
                    <label for="tanggal_lahir" class="block text-gray-600 font-medium">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-violet-600">
                </div>
                <div>
                    <label for="role" class="block text-gray-600 font-medium">Role</label>
                    <select id="role" name="role" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-violet-600">
                        <option value="">Pilih Role</option>
                        <option value="Siswa">Siswa</option>
                        <option value="Guru">Guru</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>
                <div>
                    <label for="alamat" class="block text-gray-600 font-medium">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-violet-600" placeholder="Masukkan Alamat"></textarea>
                </div>
                <button type="submit" class="w-full bg-violet-500 text-white font-semibold py-2 rounded-md hover:bg-violet-600 focus:outline-none focus:ring-2 focus:ring-violet-600 focus:ring-opacity-50">
                    Submit
                </button>
            </form>
        </div>
        
    </div>
    <div class="bg-gray-100 min-h-screen w-full flex h-[95vh]">
        <div class="items-center py-3 px-5 fixed bg-white m-5 rounded-lg shadow-lg flex md:hidden">
            <button id="menu-toggle" class="text-blue-950 text-3xl">
                <i class="bi bi-list"></i>
            </button>
        </div>
        <div id="sidebar" class="bg-zinc-50 p-5 shadow-md w-[16rem] md:w-[20rem] z-20 transform -translate-x-full transition-transform duration-300 ease-in-out md:translate-x-0 h-screen min-h-full fixed md:relative">
            <h1 class="text-2xl font-bold mb-7 text-center text-blue-950">Xionnary</h1>
            <ul class="space-y-3 text-sm items-center">
                <li class="px-5 py-3 hover:text-violet-600 rounded text-gray-400 font-semibold"><i class="bi bi-house mr-2"></i> <a href="index.html">Home</a></li>
                <li class="px-5 py-3 hover:text-violet-600 rounded text-gray-400 font-semibold "><i class="bi bi-info-circle mr-2"></i> <a href="update-about.html">About</a></li>
                <li class="bg-violet-600 px-5 py-3 rounded-xl shadow-md text-white font-semibold"><i class="bi bi-people mr-2"></i><a href="update-data-siswa.html">Data Siswa</a></li>
                <li class="px-5 py-3 hover:text-violet-600 rounded text-gray-400 font-semibold"> <i class="bi bi-envelope mr-2"></i> <a href="contact-us.html">Contact</a></li>
            </ul>
        </div>
        <div class="container-lg flex flex-col w-full">
            <div class="search-input flex md:mt-5 mt-24 justify-center md:mx-52 mx-5 items-center sticky top-0 z-10 -ml-5">
                <div class="container flex justify-between items-center mx-10 w-[4rm] md:w-[40rem] bg-white shadow-sm pl-5 pr-1 py-3 rounded-md">
                    <input class="sc text-sm bg-transparent outline-none text-black w-full" type="search" id="search-input" placeholder="Input nama disini">
                    <button type="submit">
                        <i class="bi bi-search bg-violet-600 text-white px-3 py-2 rounded-md"></i>
                    </button>
                </div>
                <button id="add-btn" class="bg-violet-600 px-3 py-2 rounded-md text-white shadow-sm hover:scale-105 transition transform duration-300">Tambah</button>
            </div>
            <div class="card justify-center items-center w-full flex flex-wrap max-h-[90vh] overflow-y-scroll" id="student-cards">
                <div class="container p-4 max-w-64 student-card" data-name="Xioo Doe">
                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <img class="w-20 h-20 rounded-full mx-auto mb-4" src="https://via.placeholder.com/80" alt="Student Photo">
                        <h3 class="text-lg font-semibold text-gray-800">Xioo Doe - $800</h3>
                        <p class="text-gray-500 text-sm mb-4">High School Senior</p>
                        <div class="flex justify-center flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Remote</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Science</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Math Club</span>
                        </div>
                        <div class="flex justify-center gap-4">
                            <button class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">Connect</button>
                            <button class="px-4 py-2 bg-gray-200 text-indigo-600 text-sm font-medium rounded-md hover:bg-gray-300">Save</button>
                        </div>
                    </div>
                </div>
                <div class="container p-4 max-w-64 student-card" data-name="John Doe">
                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <img class="w-20 h-20 rounded-full mx-auto mb-4" src="https://via.placeholder.com/80" alt="Student Photo">
                        <h3 class="text-lg font-semibold text-gray-800">John Doe - $800</h3>
                        <p class="text-gray-500 text-sm mb-4">High School Senior</p>
                        <div class="flex justify-center flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Remote</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Science</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Math Club</span>
                        </div>
                        <div class="flex justify-center gap-4">
                            <button class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">Connect</button>
                            <button class="px-4 py-2 bg-gray-200 text-indigo-600 text-sm font-medium rounded-md hover:bg-gray-300">Save</button>
                        </div>
                    </div>
                </div>
                <div class="container p-4 max-w-64 student-card" data-name="John Doe">
                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <img class="w-20 h-20 rounded-full mx-auto mb-4" src="https://via.placeholder.com/80" alt="Student Photo">
                        <h3 class="text-lg font-semibold text-gray-800">John Doe - $800</h3>
                        <p class="text-gray-500 text-sm mb-4">High School Senior</p>
                        <div class="flex justify-center flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Remote</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Science</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Math Club</span>
                        </div>
                        <div class="flex justify-center gap-4">
                            <button class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">Connect</button>
                            <button class="px-4 py-2 bg-gray-200 text-indigo-600 text-sm font-medium rounded-md hover:bg-gray-300">Save</button>
                        </div>
                    </div>
                </div>
                <div class="container p-4 max-w-64 student-card" data-name="yahya">
                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <img class="w-20 h-20 rounded-full mx-auto mb-4" src="https://via.placeholder.com/80" alt="Student Photo">
                        <h3 class="text-lg font-semibold text-gray-800">Yahya - $800</h3>
                        <p class="text-gray-500 text-sm mb-4">High School Senior</p>
                        <div class="flex justify-center flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Remote</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Science</span>
                            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">Math Club</span>
                        </div>
                        <div class="flex justify-center gap-4">
                            <button class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">Connect</button>
                            <button class="px-4 py-2 bg-gray-200 text-indigo-600 text-sm font-medium rounded-md hover:bg-gray-300">Save</button>
                        </div>
                    </div>
                </div>
                <!-- Copy this card structure for more students -->
            </div>
        </div>
    </div>
    <script>
        // JavaScript untuk fitur pencarian
        document.getElementById('search-input').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const studentCards = document.querySelectorAll('.student-card');
            
            studentCards.forEach(card => {
                const studentName = card.getAttribute('data-name').toLowerCase();
                if (studentName.includes(searchValue)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
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

    const addBtn = document.getElementById('add-btn');
    const cardForm = document.getElementById('card-form');
    const closebtn = document.getElementById('close-btn-form');
    addBtn.addEventListener('click', () => {
        cardForm.classList.remove('hidden');
    })
    closebtn.addEventListener('click', () => {
        cardForm.classList.add('hidden');
    })
    </script>
</body>
</html>
