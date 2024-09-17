<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/darkmode.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Poppins:wght@200;400&display=swap"
    rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-gray-200 dark:bg-blek-900">
    <x-navbar>

    </x-navbar>

    <div class="flex pt-12 overflow-hidden">

        {{-- sidebar --}}
  
          <x-side-bar-pa>
              
          </x-side-bar-pa>
        {{-- end sidebar --}}
  
  
        <div id="main-content" class="relative text-gray-900 dark:text-gray-200 font-poppins w-full h-full overflow-y-auto lg:pl-52">
            <div class=" py-8">
                <div class="2xl:col-span-2 sm:p-6 ">
                    <div class="flex justify-between">
                        <div class="flex gap-10 ">
                            <div>            
                                <button id="dropdownButton1" data-dropdown-toggle="dropdownMenu1" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Strata 
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                        
                                <!-- Dropdown menu -->
                                <div id="dropdownMenu1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">S1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">S2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>            
                                <button id="dropdownButton2" data-dropdown-toggle="dropdownMenu2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Jurusan 
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                        
                                <!-- Dropdown menu -->
                                <div id="dropdownMenu2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton2">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Informatika</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sistem Informasi</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>            
                                <button id="dropdownButton3" data-dropdown-toggle="dropdownMenu3" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Angkatan 
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                        
                                <!-- Dropdown menu -->
                                <div id="dropdownMenu3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton2">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2020</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2021</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2024</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>            
                                <button id="dropdownButton4" data-dropdown-toggle="dropdownMenu4" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Kelas 
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                
                                <!-- Dropdown menu -->
                                <div id="dropdownMenu4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton2">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">A</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">B</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">C</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">D</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <button id="selectAll" class="text-white bg-[#2ACD7F] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Setujui Semua <span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                                        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z"/>
                                        <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0"/>
                                      </svg></span>
                                </button> 
                            </div>
                        </div>
                    </div>
                </div> 
                <table class="w-full text-center">
                    <thead class="bg-[#283445]">
                        <tr class="text-white">
                            <th class="w-[15%] py-6 px-7">No</th>
                            <th class="w-[25%] py-6 px-7">ID Ajuan</th>
                            <th class="w-[30%] py-6 px-7">Nama Mahasiswa</th>
                            <th class="w-[30%] py-6 px-7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-4">1</td>
                            <td class="py-4">43E531</td>
                            <td class="py-4">Gibran Rakabuming</td>
                            <td class="py-4 space-x-5">
                                <button class="text-white px-4 py-2 bg-[#2F19D2] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Detail
                                </button>
                                <button class="text-white px-4 py-2 bg-[#41D219] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Setuju
                                </button>
                                <button class="text-white px-4 py-2 bg-[#C81E1E] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Tolak
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4">2</td>
                            <td class="py-4">56F74Y</td>
                            <td class="py-4">Erina Gudono</td>
                            <td class="py-4 space-x-5">
                                <button class="text-white px-4 py-2 bg-[#2F19D2] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Detail
                                </button>
                                <button class="text-white px-4 py-2 bg-[#41D219] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Setuju
                                </button>
                                <button class="text-white px-4 py-2 bg-[#C81E1E] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Tolak
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4">3</td>
                            <td class="py-4">K457E9</td>
                            <td class="py-4">Jan Ethes</td>
                            <td class="py-4 space-x-5">
                                <button class="text-white px-4 py-2 bg-[#2F19D2] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Detail
                                </button>
                                <button class="text-white px-4 py-2 bg-[#41D219] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Setuju
                                </button>
                                <button class="text-white px-4 py-2 bg-[#C81E1E] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Tolak
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4">4</td>
                            <td class="py-4">3JDN3U</td>
                            <td class="py-4">Selvi Ananda</td>
                            <td class="py-4 space-x-5">
                                <button class="text-white px-4 py-2 bg-[#2F19D2] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Detail
                                </button>
                                <button class="text-white px-4 py-2 bg-[#41D219] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Setuju
                                </button>
                                <button class="text-white px-4 py-2 bg-[#C81E1E] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Tolak
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
        
</body>
</html>