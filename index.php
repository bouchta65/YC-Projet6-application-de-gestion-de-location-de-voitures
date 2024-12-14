<?php
session_start(); 

if (!isset($_SESSION["user"])) {
    header("Location: src/views/login.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application de gestion de location de voituresapplication de gestion de location de voitures</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<header class='flex shadow-md sm:px-10 px-6 py-3 bg-white font-[sans-serif] min-h-[70px]'>
      <div class="flex w-full max-w-screen-xl mx-auto">
        <div
          class='flex flex-wrap items-center justify-between relative lg:gap-y-4 gap-y-4 gap-x-4 w-full'>

          <div class="flex">
            <button id="toggleOpen">
              <svg class="w-8 h-8" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
            <a href="index.php" class="ml-8">
              <img src="public/assets/images/logo.png" alt="logo"
                class='w-32 max-sm:hidden' />
              <img src="public/assets/images/logo.png" alt="logo"
                class='w-[120px] hidden max-sm:block' />
            </a>
          </div>

          <div
            class="bg-gray-100 flex items-center border max-md:order-1 border-transparent focus-within:border-black focus-within:bg-transparent px-4 rounded-sm h-10 min-w-[40%] lg:w-2/4 max-md:w-full transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904"
              class="fill-gray-400 mr-4 w-4 h-4">
              <path
                d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
              </path>
            </svg>
            <input type='email' placeholder='Search...' class="w-full outline-none bg-transparent text-black text-sm" />
          </div>

          <div class='flex items-center space-x-4 max-md:ml-auto'>
          <button id="buttonAjouter" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ajouter une voiture</button>
          <button type="button" class="border-none outline-none flex items-center justify-center rounded-full p-2 hover:bg-gray-100 transition-all">
              <a href="src/views/logout.php" class="flex items-center justify-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 cursor-pointer fill-black" viewBox="0 0 24 24">
              <path d="M10 17L15 12L10 7V10H4V14H10V17ZM21 3H12V5H21V19H12V21H21C22.104 21 23 20.104 23 19V5C23 3.896 22.104 3 21 3Z"/>
              </svg>
              </a>
           </button>
          </div>
        </div>

        <div id="collapseMenu"
          class='hidden before:fixed before:bg-black before:opacity-40 before:inset-0 max-lg:before:z-50'>
          <button id="toggleClose" class='fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
              <path
                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                data-original="#000000"></path>
              <path
                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                data-original="#000000"></path>
            </svg>
          </button>

          <ul
            class='block space-x-4 space-y-3 fixed bg-white w-1/2 min-w-[300px] top-0 left-0 p-4 h-full shadow-md overflow-auto z-50'>
            <li class='pb-4 px-3'>
              <a href="index.php"><img src="public/assets/images/logo.png" alt="logo" class='w-36' />
              </a>
            </li>
            <li class='border-b pb-4 px-3 hidden'>
              <a href="index.php"><img src="public/assets/images/logo.png" alt="logo" class='w-36' />
              </a>
            </li>
            <li class='border-b py-3 px-3'>
              <a href='index.php' class='hover:text-[#007bff] text-[#007bff] block font-semibold text-base'>Accueil</a>
            </li>
            <li class='border-b py-3 px-3'><a href='src/views/voiture.php'
              class='hover:text-[#007bff] text-black block font-semibold text-base'>Voiture</a>
            </li>
            <li class='border-b py-3 px-3'><a href='src/views/contrats.php'
              class='hover:text-[#007bff] text-black block font-semibold text-base'>Contrats</a>
            </li>
            <li class='border-b py-3 px-3'><a href='src/views/clients.php'
              class='hover:text-[#007bff] text-black block font-semibold text-base'>Clients</a>
            </li>
          </ul>
        </div>
      </div>
    </header>




    <div class="container mx-auto p-6">
  <!-- Title -->
  <h1 class="text-3xl font-bold text-gray-800 mb-6"> statistique</h1>

  <!-- Grid of Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">Total Users</h2>
      <p class="text-3xl font-bold text-blue-600">10,492</p>
      <p class="text-sm text-gray-500 mt-2">↑ 12% from last month</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">Revenue</h2>
      <p class="text-3xl font-bold text-green-600">$84,320</p>
      <p class="text-sm text-gray-500 mt-2">↑ 8% from last month</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">Active Projects</h2>
      <p class="text-3xl font-bold text-purple-600">23</p>
      <p class="text-sm text-gray-500 mt-2">↓ 2 from last month</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">Tasks Completed</h2>
      <p class="text-3xl font-bold text-orange-600">1,342</p>
      <p class="text-sm text-gray-500 mt-2">↑ 18% from last month</p>
    </div>
  </div>
</div>




</div>



</body>

<script src="public/assets/js/scrypt.js"></script>
</html>