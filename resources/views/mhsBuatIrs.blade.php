<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/darkmode.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Poppins:wght@200;400&display=swap"
    rel="stylesheet">
    <title>Login</title>
</head>

<body class = "bg-gray-50 dark:bg-[#09192E]"> 


  {{-- navbar --}}
    <x-navbar></x-navbar>
    
  {{-- endnavbar --}}

    <div class="flex pt-12 overflow-hidde">

      {{-- sidebar --}}

        <x-side-bar-mhs>
            
        </x-side-bar-mhs>
      {{-- end sidebar --}}


      <div id="main-content" class="relative w-full h-full font-poppins overflow-y-auto lg:mt-4 bg-gray-50 lg:ml-52 dark:bg-gray-900">
        
        <div class="flex justify-between mx-14 my-8">
          <h1 class=" text-3xl font-semibold text-gray-900 dark:text-gray-200">Buat IRS</h1>
          <input type="text" placeholder="Search" class="bg-white dark:bg-gray-700 rounded-lg">
        </div>
        <div class="mt-2 mx-14 bg-white border border-gray-200 font-semibold text-[#374250] dark:text-white rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <h1 class="mb-4">Pilihan Mata Kuliah Semester 5</h1>
          <div>
              <h2 class="mt-4">Aljabar Linear - PAIK6204 (3 SKS)</h2>
              <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
              <div class="mt-4">
                  <div class="flex items-center mb-4">
                      <input type="radio" name="alin" id="alin_a" class="mr-2">
                      <label for="alin_a">Aljabar Linear - A</label>
                  </div>
                  <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                  
                  <div class="flex items-center mb-4">
                      <input type="radio" name="alin" id="alin_b" class="mr-2">
                      <label for="alin_b">Aljabar Linear - B</label>
                  </div>
                  <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                  
                  <div class="flex items-center mb-4">
                      <input type="radio" name="alin" id="alin_c" class="mr-2">
                      <label for="alin_c">Aljabar Linear - C</label>
                  </div>
                  <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                  
                  <div class="flex items-center mb-4">
                      <input type="radio" name="alin" id="alin_d" class="mr-2">
                      <label for="alin_d">Aljabar Linear - D</label>
                  </div>
              </div>
          </div>
      </div>
      
        </div>

      </div>


    </div>
  </body>
</html>
