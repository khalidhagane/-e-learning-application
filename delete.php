
<?php
include("connection.php");
// supprimer liya ga3 lie information mali ikon id li kain f data kisawi id li ghadi n klick 3lih ola ghadi ndakhlo ex: id =$_GET[id]
$query = "DELETE  FROM tableau_student WHERE id='$_GET[id]'";
// mysqli_query -> traitment le code delete
$sql=mysqli_query($con,$query);
if($sql){

    header("location: student.php");
}
 
?>
