
<?php
include("connection.php");

$id = $_GET['id'];
// supprimer liya ga3 lie information mali ikon id li kain f data kisawi id li ghadi n klick 3lih ola ghadi ndakhlo ex: id =$_GET[id]
$query = "DELETE  FROM tableau_student WHERE id=$id";
// mysqli_query -> traitment le code delete
$sql=mysqli_query($con,$query);

// if($sql){
    

    header("location: student.php");
// }

?>
