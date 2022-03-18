<?php
include 'connection.php';

// coumpteur_std
$query_std="SELECT * FROM tableau_student";
$result_std=mysqli_query($con,$query_std); 
$compteur_std=mysqli_num_rows($result_std);

//coumpteur_py
  $query_py="SELECT SUM(balance_amount) as payer FROM tableau_payment";
  $result_py=mysqli_query($con,$query_py); 
  $compteur_py=mysqli_fetch_assoc($result_py);
  $sum = $compteur_py['payer'];

//coumpteur_crs
  $query_crs="SELECT * FROM tableau_cours";
$result_crs=mysqli_query($con,$query_crs); 
$compteur_crs=mysqli_num_rows($result_crs);

//coumpteur_user
$query_user="SELECT * FROM comptes";
$result_user=mysqli_query($con,$query_user);
$coumpteur_user=mysqli_num_rows($result_user);
?>
