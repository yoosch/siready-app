@extends('header')

@section('title','Registrasi')

@section('page')
     {{-- navbar --}}
     <x-navbar></x-navbar>
    
     {{-- endnavbar --}}
   
       <div class="flex pt-12 overflow-hidden">
   
         {{-- sidebar --}}
   
           <x-side-bar-mhs>
               
           </x-side-bar-mhs>
   
         {{-- end sidebar --}}
   
   
         <div id="main-content" class="relative w-full h-full font-poppins overflow-y-auto text-gray-900 dark:text-gray-200  lg:ml-64">
            <h1 class="font-semibold text-4xl mt-10 mb-4">Pilih Status Akademik</h1>
            <h1 class="text-[#9CA3AF]">Silahkan pilih status akademik untuk semester ini</h1>
            <div class="grid grid-cols-2 mt-16 mx-7 h-[60vh]">
                <div class="bg-white p-6 mx-7 w-[85%] rounded-2xl h-full flex flex-col justify-between dark:bg-blek-700">
                    <div>
                        <div class="flex items-center">
                            <img src="{{ asset('aktif.png') }}" width="100" alt="">
                            <h1 class="font-bold text-3xl text-center mb-5 pt-4">Aktif</h1>
                        </div>
                        <h1 class="text-[#9CA3AF] px-5">Anda akan mengikuti kegiatan perkuliahan pada semester ini serta mengisi Isian Rencana Studi (IRS).</h1>
                    </div>
                    <h1 class="bg-[#ecaa54] dark:bg-[#F87430] duration-300 dark:hover:bg-white dark:hover:text-[#F87430] text-white text-center px-6 py-3 font-bold rounded-2xl">Pilih</h1>
                </div>
                <div class="bg-white dark:bg-blek-700 dark:border-gray-700 p-6 mx-7 w-[85%] rounded-2xl h-full flex flex-col justify-between">
                    <div>
                        <div class="flex items-center px-3">
                            <img src="{{ asset('cuti.png') }}" width="65" alt="">
                            <h1 class="font-bold text-3xl text-center mb-5 pt-4 ml-4">Cuti</h1>
                        </div>
                        <h1 class="text-[#9CA3AF] px-5">Menghentikan kuliah sementara untuk semester ini tanpa kehilangan status sebagai mahasiswa Undip.</h1>
                    </div>
                    <h1 class="bg-[#ecaa54] dark:bg-[#F87430] duration-300 dark:hover:bg-white dark:hover:text-[#F87430] text-white text-center px-6 py-3 font-bold rounded-2xl">Pilih</h1>
                </div>
            </div>
        </div>
    </div>


@endsection