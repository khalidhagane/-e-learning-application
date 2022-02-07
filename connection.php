<?php

// connection
$mysqli = new mysqli('localhost', 'root', '', 'e-classe') or
die(mysqli_error($mysqli));

$result = $mysqli->query("select * FROM tableau_student")
or die($mysqli->error);

// insert
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    
    $mysqli->query("INSERT INTO tableau_student (name, email, phone, number, date) VALUES('$name','$email','$phone' ,'$number','$date')")
    or die($mysqli->error);

    header("location: student.php");
}

// delete

 if (isset($_GET['delete'])){
     $id= $_GET['delete'];
     $mysqli->query("DELETE FROM tableau_student WHERE id=$id") or die($mysqli->error());
     
     header("location: student.php");
 }



// if(count($_POST)>0){
// 	if($_POST['type']==3){
// 		$id=$_POST['id'];
// 		$sql = "DELETE FROM e-class WHERE id=$id ";
// 		if (mysqli_query($conn, $sql)) {
// 			echo $id;
// 		} 
// 		else {
// 			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 		}
// 		mysqli_close($conn);
// 	}
// }
?>