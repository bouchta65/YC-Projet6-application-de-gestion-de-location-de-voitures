<?php
  if(isset($_POST['EditForm'])){

    $matricule = $_POST['matricule'];
    $marque=$_POST['marque'];
    $modele=$_POST['modele'];
    $annee=$_POST['productionDate'];
    $fuelType=$_POST['fuelType'];
    $status=$_POST['status'];
    $prixvoiture=$_POST['prixvoiture'];

    $sql5="UPDATE voiture SET marque = '$marque', modele = '$modele', Annee = '$annee', type_carburant = '$fuelType', etat = '$status', prix_location = '$prixvoiture' 
    where matricule = '$matricule'";
    mysqli_query($conn,$sql5);
  }
?>