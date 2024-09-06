<div id="sidebar" class="top-0 px-5 z-20 flex-col hidden w-64 min-h-screen bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
    <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
        <div class="flex-1 px-3 space-y-1">
            <ul class="pb-2 space-y-2">
                <!-- Profil -->
                <li>
                    <img src="profile.png" class="rounded-full flex mx-auto" width="100" alt="">
                </li>
                <ul class="text-white text-center">
                    <li><p>Mulyono</p></li>
                    <li><p>24060122110001</p></li>
                    <li><p>Informatika S1</p></li>
                </ul>

                <!-- Dashboard -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-[#111827] transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                        <span class="mx-auto"><a href="/dashboard">Dashboard</a></span>
                    </button>
                </li>

                <!-- Registrasi -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-[#111827] transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                        <span class="mx-auto"><a href="/registration">Registrasi</a></span>
                    </button>
                </li>

                <!-- Akademik Dropdown -->
                <li>
                    <button id="toggle-akademik" type="button" class="flex items-center justify-between w-full p-2 text-base text-[#111827] transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                        <span class="mx-auto">Akademik</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-akademik" class="hidden space-y-2 py-2">
                        <li>
                            <a href="#" class="text-[#111827] rounded-lg flex items-center justify-center p-2 group hover:bg-gray-100 transition duration-75 dark:text-gray-200 dark:hover:bg-gray-700">
                                Buat IRS
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-[#111827] rounded-lg flex items-center justify-center p-2 group hover:bg-gray-100 transition duration-75 dark:text-gray-200 dark:hover:bg-gray-700">
                                IRS
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-[#111827] rounded-lg flex items-center justify-center p-2 group hover:bg-gray-100 transition duration-75 dark:text-gray-200 dark:hover:bg-gray-700">
                                KHS
                            </a>
                        </li>
                        <li>
                            <a href="/transcript" class="text-[#111827] rounded-lg flex items-center justify-center p-2 group hover:bg-gray-100 transition duration-75 dark:text-gray-200 dark:hover:bg-gray-700">
                                Transkrip
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    document.getElementById('toggle-akademik').addEventListener('click', function() {
        var dropdown = document.getElementById('dropdown-akademik');
        dropdown.classList.toggle('hidden');
    });
</script>