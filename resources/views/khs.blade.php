<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/darkmode.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body class = "bg-gray-50 dark:bg-gray-900"> 


  {{-- navbar --}}
    <x-navbar></x-navbar>
    
  {{-- endnavbar --}}

    <div class="flex pt-16 overflow-hidde">

      {{-- sidebar --}}

        <x-side-bar-mhs>
            
        </x-side-bar-mhs>
      {{-- end sidebar --}}


      <div id="main-content" class="relative w-full h-full overflow-y-auto lg:mt-4 bg-gray-50 lg:ml-52 dark:bg-gray-900">

        <h1 class="mx-14 my-8 text-3xl font-semibold text-gray-900 dark:text-gray-200">Kartu Hasil Studi (KHS)</h1>
        <div class = "mt-2 mx-14 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="p-10 my-3 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-700 flex items-center justify-between" id = ''>
              <div>
                  <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Semester 1</h3>
                  <h4 class="font-light text-sm text-gray-900 dark:text-gray-200">2021/2022</h4>
              </div>
              <svg class="arrow-icon bi bi-arrow-down cursor-pointer dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"">
                  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
              </svg>
            </div>
            <div class="p-10 my-3 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-700 flex items-center justify-between" id = ''>
              <div>
                  <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Semester 2</h3>
                  <h4 class="font-light text-sm text-gray-900 dark:text-gray-200">2021/2022</h4>
              </div>
              <svg class="arrow-icon bi bi-arrow-down cursor-pointer dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"">
                  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
              </svg>
            </div>
            <div class="p-10 my-3 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-700 flex items-center justify-between" id = ''>
              <div>
                  <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Semester 3</h3>
                  <h4 class="font-light text-sm text-gray-900 dark:text-gray-200">2022/2023</h4>
              </div>
              <svg class="arrow-icon bi bi-arrow-down cursor-pointer dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"">
                  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
              </svg>
            </div>
            <div class="p-10 my-3 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-700 flex items-center justify-between" id = ''>
              <div>
                  <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Semester 4</h3>
                  <h4 class="font-light text-sm text-gray-900 dark:text-gray-200">2022/2023</h4>
              </div>
              <svg class="arrow-icon bi bi-arrow-down cursor-pointer dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" ">
                  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
              </svg>
            </div>
          </div>
        
        </div>


        
      </div>


    </div>


    {{-- darkmode --}}
      <script>
          

                        
      </script>
    {{-- enddarkmode --}}

    {{-- arrow table --}}

      <!-- jQuery Script -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
      $(document).ready(function() {
          $('.arrow-icon').on('click', function() {
              const icon = $(this);
              const semester = icon.data('semester'); // Get the semester value
              console.log(semester);
              const isDown = icon.hasClass('bi-arrow-down');

              // Toggle the arrow direction
              if (isDown) {
                  icon.removeClass('bi-arrow-down').addClass('bi-arrow-up');
                  icon.html('<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>');
                  
                  // AJAX request to fetch data
                  $.ajax({
                      url: `/irs/${semester}`, // Replace with your server endpoint
                      method: 'GET',
                      data: { semester: semester },
                      success: function(response) {

                          console.log(response);
                          // Handle the response data
                          // You can append the data to the DOM or do something else with it
                          icon.closest('.semester-item').append('<div class="additional-info">'+response+'</div>');
                      },
                      error: function(xhr, status, error) {
                          console.error('Error fetching data:', error);
                      }
                  });
              } else {
                  icon.removeClass('bi-arrow-up').addClass('bi-arrow-down');
                  icon.html('<path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>');
                  
                  // Optionally, remove the appended data if the arrow is clicked to collapse
                  icon.closest('.semester-item').find('.additional-info').remove();
              }
          });
      });
      </script>

  {{-- endarrowtabel --}}


  </body>
</html>
