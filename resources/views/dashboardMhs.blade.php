<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-navBar>
        
    </x-navBar>
    <div class="flex">
        <x-side-bar-mhs>

        </x-side-bar-mhs>
        <div id="content" class=" bg-[#111827] py-7 px-16 z-30 min-h-screen w-full text-white">
            <h1 class="font-bold text-3xl mb-5">Hai Mulyono👋</h1>
            <div class="bg-[#1F2937] p-4 rounded-3xl">
                <div class="grid grid-cols-3 pt-4 py-8">
                    <div class="bg-[#2ACD7F] p-6 rounded-2xl text-right mx-9">
                        {{-- <img src="profile.png" class="fixed w-16 -ml-10 mt-10 opacity-40 overflow-hidden" alt=""> --}}
                        <h1 class="text-2xl font-bold">AKTIF</h1>
                        <h1>Status Mahasiswa</h1>
                    </div>
                    <div class="bg-[#2AA6CD] p-6 rounded-2xl text-right mx-9">
                        <h1 class="text-2xl font-bold">3.2</h1>
                        <h1>IP Kumulatif</h1>
                    </div>
                    <div class="bg-[#3478C7] p-6 rounded-2xl text-right mx-9">
                        <h1 class="text-2xl font-bold">86</h1>
                        <h1>SKS</h1>
                    </div>
                </div>
                <h1 class="text-center"><strong>Pembimbing Akademik : </strong>H. Prabowo Subianto</h1>
                <h1 class="text-center"><strong>NIP : </strong>2222222222</h1>
                <div class="grid grid-cols-3 space-x-2 py-8 text-center font-semibold">
                    <div class="px-3">
                        <h1>Semester Akademik Sekarang</h1>
                        <h1 class="text-2xl">2024/2025 Ganjil</h1>
                    </div>
                    <div class="border-x px-3">
                        <h1>Semester Studi</h1>
                        <h1 class="text-2xl">7</h1>
                    </div>
                    <div class="px-3">
                        <h1>IP Semester</h1>
                        <h1 class="text-2xl">2.3</h1>
                    </div>
                </div>
            </div>
            <div class="flex mt-5 space-x-6">
                <div class="w-[70%] ">
                    <h1 class="font-bold text-2xl mb-5">Today's Schedule</h1>
                    <div class="grid grid-cols-3 bg-[#1F2937] p-4 rounded-3xl text-center text-[#9CA3AF]">
                        <div>
                            <h1 class="font-bold pt-1 pb-3">Subject</h1>
                            <h1>Pengembangan Berbasis</h1>
                            <h1>Proyek Perangkat Lunak</h1>
                            <h1>Penambangan Data</h1>
                        </div>
                        <div>
                            <h1 class="font-bold pt-1 pb-3">Room</h1>
                            <h1>E101</h1>
                            <h1>A303</h1>
                            <h1>E102</h1>
                        </div>
                        <div>
                            <h1 class="font-bold pt-1 pb-3">Time</h1>
                            <h1>13.00-15.30</h1>
                            <h1>15.30-18.00</h1>
                            <h1>09.30-12.20</h1>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] h-auto">
                    <h1 class="font-bold text-2xl mb-5">Announcement</h1>
                    <div class="bg-[#1F2937] p-4 rounded-3xl text-[#9CA3AF] h-auto mb-0">
                        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod harum quos alias rem nemo dolorum, excepturi eius tenetur inventore</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
