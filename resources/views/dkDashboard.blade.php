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
  
          <x-side-bar-kp>
            
          </x-side-bar-kp>
        {{-- end sidebar --}}
  
  
        <div id="main-content" class="relative text-gray-900 dark:text-gray-200 font-poppins w-full h-full overflow-y-auto lg:pl-52">
            <div class="px-8 py-8">
                <div class="pb-8 bg-white border border-gray-200 rounded-3xl shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-blek-700">
                    <h1 class="font-semibold text-2xl px-16">Fakultas Sains dan Matematika</h1>
                    <div class="grid grid-cols-3 gap-16 px-16 py-5">
                        <div class="bg-[#38A6D6] p-6 rounded-2xl text-right">
                            <h1 class="text-2xl font-bold">632</h1>
                            <h1>Total Mahasiswa</h1>
                        </div>
                        <div class="bg-[#2ACD7F] p-6 rounded-2xl text-right">
                            <h1 class="text-2xl font-bold">610</h1>
                            <h1>Mahasiswa Aktif</h1>
                        </div>
                        <div class="bg-[#C34444] p-6 rounded-2xl text-right">
                            <h1 class="text-2xl font-bold">22</h1>
                            <h1>Mahasiswa Cuti</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-16 px-16 py-5">
                        <div class="bg-[#38A6D6] p-6 rounded-2xl text-right">
                            <h1 class="text-2xl font-bold">632</h1>
                            <h1>Total Mahasiswa</h1>
                        </div>
                        <div class="bg-[#2ACD7F] p-6 rounded-2xl text-right">
                            <h1 class="text-2xl font-bold">610</h1>
                            <h1>Mahasiswa Aktif</h1>
                        </div>
                        <div class="bg-[#C34444] p-6 rounded-2xl text-right">
                            <h1 class="text-2xl font-bold">22</h1>
                            <h1>Mahasiswa Cuti</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <h1 class="text-2xl font-semibold px-8">Pengajuan Jadwal dan Ruangan</h1>
                <div class="max-w-3xl mx-auto grid grid-cols-2 gap-8 px-8 py-4 bg-white border border-gray-200 rounded-3xl shadow-sm dark:border-gray-700 dark:bg-[#162B44]">
                    <div class="bg-[#38A6D6] p-4 rounded-2xl text-right">
                        <h1 class="text-2xl font-bold">40</h1>
                        <h1>Pengajuan Ruangan</h1>
                    </div>
                    <div class="bg-[#2ACD7F] p-4 rounded-2xl text-right">
                        <h1 class="text-2xl font-bold">30</h1>
                        <h1>Pengajuan Jadwal</h1>
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>