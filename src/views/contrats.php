<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application de gestion de location de voituresapplication de gestion de location de voitures</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<?php
include '../db/config.php';
?>
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
            <a href="../index.php" class="ml-8">
              <img src="../../public/assets/images/logo.png" alt="logo"
                class='w-32 max-sm:hidden' />
              <img src="../../public/assets/images/logo.png" alt="logo"
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
            <button id="buttonAjouter" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ajouter une contrat</button>
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
              <a href="index.php"><img src="../../public/assets/images/logo.png" alt="logo" class='w-36' />
              </a>
            </li>
            <li class='border-b pb-4 px-3 hidden'>
              <a href="index.php"><img src="../../public/assets/images/logo.png" alt="logo" class='w-36' />
              </a>
            </li>
            <li class='border-b py-3 px-3'>
              <a href='../../index.php' class='hover:text-[#007bff] text-black block font-semibold text-base'>Accueil</a>
            </li>
            <li class='border-b py-3 px-3'><a href='voiture.php'
              class='hover:text-[#007bff] text-black block font-semibold text-base'>Voiture</a>
            </li>
            <li class='border-b py-3 px-3'><a href='contrats.php'
              class='hover:text-[#007bff]  text-[#007bff] block font-semibold text-base'>Contrats</a>
            </li>
            <li class='border-b py-3 px-3'><a href='clients.php'
              class='hover:text-[#007bff] text-black block font-semibold text-base'>Clients</a>
            </li>
          </ul>
        </div>
      </div>
    </header>


    <div id="vehicleModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden">
  <form id="vehicleForm" class="bg-white rounded-lg w-full max-w-[60rem] sm:max-w-3/4 md:max-w-2/3 p-4 sm:p-6 shadow-lg overflow-y-auto" method='POST' action='contrats.php' enctype="multipart/form-data">
    <div class="flex justify-between items-center mb-4 sm:mb-6">
      <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Nouvelle Client</h2>
      <button id="closeVehicleModal" class="text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    
    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
      <!-- Left Side Inputs -->
      <div class="w-full space-y-4">
        <div class="flex flex-col">
          <label for="idclient" class="font-medium text-gray-600 text-sm sm:text-base">Client</label>
         <select id="idclient" name="idclient" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
         <option value="">Select Client</option>
        <?php
            $sql = "SELECT * from client";
            $result = mysqli_query($conn,$sql);
            while($i = mysqli_fetch_row($result)){
                echo '<option value="'.$i[0].'">'.$i[0].'</option>';
            }
            ?>
          </select>
        </div>
        <div class="flex flex-col">
          <label for="idvoiture" class="font-medium text-gray-600 text-sm sm:text-base">Voiture</label>
          <select id="idvoiture" name="idvoiture" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
         <option value="">Select Voiture</option>
          <?php
            $sql = "SELECT * from voiture";
            $result = mysqli_query($conn,$sql);
            while($i = mysqli_fetch_row($result)){
                echo '<option value="'.$i[0].'">'.$i[0].'</option>';
            }
            ?>
          </select>
        </div>
        <div class="flex flex-col">
          <label for="datedebut" class="font-medium text-gray-600 text-sm sm:text-base">Date debut</label>
          <input type="date" id="datedebut" name="datedebut" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ex: 2024/12/10">
        </div>
        <div class="flex flex-col">
          <label for="datefin" class="font-medium text-gray-600 text-sm sm:text-base">Date fin</label>
          <input type="date" id="datefin" name="datefin" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ex: 2024/12/17">
        </div>

      </div>
      
    </div>

    <div class="mt-6 sm:mt-8 flex justify-between space-y-4 sm:space-y-0 sm:flex-row">
      <button type="submit" id="closeModalBtn" class="bg-red-500 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Annuler</button>
      <input type="submit" value="Valider" name="validateForm"id="validateForm" class="bg-green-600 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
    </div>
  </form>
</div>


<?php
  
  
if(isset($_POST['validateForm'])){
  
  $idclient = $_POST['idclient'];
  $idvoiture = $_POST['idvoiture'];
  $datedebut = $_POST['datedebut'];
  $datefin = $_POST['datefin'];
  $duree = (strtotime($datefin) - strtotime($datedebut)) / (60 * 60 * 24);

  $sql = "INSERT INTO contrat (voiture_id,client_id,date_debut,date_fin,Duree) VALUES ('$idvoiture', '$idclient', '$datedebut','$datefin', '$duree')";
  mysqli_query($conn, $sql);
}

$sql2 = "SELECT * FROM contrat,voiture where voiture.matricule = contrat.voiture_id";
$result = mysqli_query($conn, $sql2);
?>


<div class="hidden lg:block overflow-x-auto">
  <table class="min-w-full bg-white shadow-md rounded-lg border-collapse">
    <thead>
      <tr class="bg-gray-200 text-gray-700">
        <th class="py-3 px-4 text-left text-sm font-semibold">Contrat ID</th>
        <th class="py-3 px-4 text-left text-sm font-semibold">Client</th>
        <th class="py-3 px-4 text-left text-sm font-semibold">Voiture</th>
        <th class="py-3 px-4 text-left text-sm font-semibold">Image</th>
        <th class="py-3 px-4 text-left text-sm font-semibold">Date debut</th>
        <th class="py-3 px-4 text-left text-sm font-semibold">Date Fin</th>
        <th class="py-3 px-4 text-left text-sm font-semibold">Duree</th>
        <th class="py-3 px-4 text-left text-sm font-semibold">Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php 
      function affichClient($result) {
        while ($i = mysqli_fetch_row($result)) {
          echo '<tr class="border-b hover:bg-gray-50">';
          echo '<td class="py-3 px-4 text-sm">'.$i[0].'</td>'; 
          echo '<td class="py-3 px-4 text-sm">'.$i[2].'</td>'; 
          echo '<td class="py-3 px-4 text-sm">'.$i[1].'</td>'; 
          echo '<td class="py-3 px-4">';
          echo '<img src="'.$i[11].'" class=" h-16 object-cover rounded-lg">';
          echo '</td>';
          echo '<td class="py-3 px-4 text-sm">'.$i[3].'</td>'; 
          echo '<td class="py-3 px-4 text-sm">'.$i[4].'</td>'; 
          echo '<td class="py-3 px-4 text-sm">'.$i[5].'</td>'; 
          echo '<td class="py-3 px-4 text-sm">';
          echo '   <form method="POST" action="">
                      <button type="submit" name="Edit" value="'.$i[0].'" class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600">Edit</button>
                      <button type="submit" name="remove" value="'.$i[0].'" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600">Remove</button>
                    </form>';
          echo '</td>';
          echo '</tr>';
        }
      }

      if (isset($_POST['remove'])) {
        $idcontrat = $_POST['remove'];
        $sql3 = "DELETE FROM contrat WHERE contrat_id='$idcontrat'";
        mysqli_query($conn, $sql3);
      }

      $result = mysqli_query($conn, $sql2);
      affichClient($result);
      ?>
    </tbody>
  </table>
</div>

<?php

if (isset($_POST['Edit'])) {
  $idcontrat = $_POST['Edit'];

  $sql4 = "SELECT * FROM contrat,voiture WHERE contrat_id = '$idcontrat' and voiture.matricule = contrat.voiture_id";
  $result2 = mysqli_query($conn,$sql4);
  $contrat = mysqli_fetch_assoc($result2);
  $idclient = $contrat['client_id'];
  $idvoiture = $contrat['voiture_id'];
  $datedebut = $contrat['date_debut'];
  $datefin = $contrat['date_fin'];
  $duree = (strtotime($datefin) - strtotime($datedebut)) / (60 * 60 * 24);


echo '
<div id="vehicleModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
    <form id="vehicleForm" class="bg-white rounded-lg w-full max-w-[60rem] sm:max-w-3/4 md:max-w-2/3 p-4 sm:p-6 shadow-lg overflow-y-auto" method="POST"  enctype="multipart/form-data">
        <div class="flex justify-between items-center mb-4 sm:mb-6">
            <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Modifier Contrat N : '.$idcontrat.'</h2>
            <button id="closeVehicleModal" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
            <div class="w-full space-y-4">
                <div class="flex flex-col">
                    <label for="idclient" class="font-medium text-gray-600 text-sm sm:text-base">ID Client</label>
                    <input type="text" id="idclient" name="idclient" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" value="'.$idclient.'" placeholder="Ex: A12345" readonly>
                </div>
                <div class="flex flex-col">
                    <label for="idvoiture" class="font-medium text-gray-600 text-sm sm:text-base">ID Voiture</label>
                    <input type="text" id="idvoiture" name="idvoiture" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" value="'.$idvoiture.'" placeholder="Ex: Renault" readonly>
                </div>
                <div class="flex flex-col">
                    <label for="datedebut" class="font-medium text-gray-600 text-sm sm:text-base">Date Debut</label>
                    <input type="date" id="datedebut" name="datedebut" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" value="'.$datedebut.'" placeholder="Ex: Clio">
                </div>
                  <div class="flex flex-col">
                    <label for="datefin" class="font-medium text-gray-600 text-sm sm:text-base">Date Fin</label>
                    <input type="date" id="datefin" name="datefin" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" value="'.$datefin.'" placeholder="Ex: Clio">
                </div>
            
            </div>

        </div>

        <div class="mt-6 sm:mt-8 flex justify-between space-y-4 sm:space-y-0 sm:flex-row">
            <button id="closeModalBtn" class="bg-red-500 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Annuler</button>
            <button type="submit" name="EditForm" value="'.$idcontrat.'" class="bg-green-500 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-red-500">Edit</button>

        </div>
    </form>
</div>';
}
if(isset($_POST['EditForm'])){
    $idcontrat = $_POST['EditForm'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];
    $duree = (strtotime($datefin) - strtotime($datedebut)) / (60 * 60 * 24);

  $sql5="UPDATE contrat SET date_debut = '$datedebut', date_fin = '$datefin', Duree = '$duree'
  where contrat_id = '$idcontrat'";
  mysqli_query($conn,$sql5);
  echo "<script>window.location.href = window.location.href;</script>";
}

$sql4 = "SELECT * FROM contrat,voiture,client WHERE voiture.matricule = contrat.voiture_id and contrat.client_id=client.client_id";
$result  = mysqli_query($conn,$sql4);
while($i = mysqli_fetch_row($result)){
 echo '<div class="lg:hidden grid grid-cols-1 gap-6 mt-6">';
 echo '<div class="bg-white shadow-lg rounded-lg p-4">';
 echo '<img src="'.$i[11].'" alt="Car 1" class="w-full  object-cover rounded-lg mb-4">';
 echo '<h3 class="text-xl font-semibold text-gray-800">'.$i[15].' '.$i[16].'</h3>';
 echo ' <p class="text-sm text-gray-600"><b>ID Client :</b> '.$i[2].'</p>';
 echo '<p class="text-sm text-gray-600"><b>ID Voiture :</b> '.$i[1].'</p>';
 echo '<p class="text-sm text-gray-600"><b>Durée :</b> '.$i[5].' Jours</p>';
 echo '<form method="POST">
 <div class="mt-4 flex space-x-3">
 <button type="submit" name="Edit" value="'.$i[0].'" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 w-full">Edit</button>
 <button type="submit" name="remove" value="'.$i[0].'" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 w-full">Remove</button>
 </div>
 </form>
 </div>';
}
?>




</body>

<script src="../../public/assets/js/scrypt.js"></script>
</html>