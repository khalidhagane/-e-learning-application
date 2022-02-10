<?php

// connection
$mysqli = new mysqli('localhost', 'root', '', 'e-classe') or
die(mysqli_error($mysqli));

$result = $mysqli->query("select * FROM tableau_student")
or die($mysqli->error);

$id=0;
$update = false;

$name="";
$email="";
$phone="";
$number="";
$date="";


// insert
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    
    $mysqli->query("INSERT  INTO tableau_student (name, email, phone, number, date) VALUES('$name','$email','$phone' ,'$number','$date')")
    or die($mysqli->error);

    header("location: student.php");
}

// delete

 if (isset($_GET['delete'])){
     $id= $_GET['delete'];
     $mysqli->query("DELETE FROM tableau_student WHERE id=$id") or die($mysqli->error());

     header("location: student.php");
 }
// edit

 if (isset($_GET['edit'])){
     $id = $_GET['edit'];

     $update = true;

     $result = $mysqli->query("SELECT * FROM tableau_student WHERE id=$id") or die($mysqli->error());
      if (isset($result)){
        $row = $result->fetch_array(); 

            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $number = $row['number'];
            $date = $row['date'];
     }

    }
    
    //update

    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $number = $_POST['number'];
        $date = $_POST['date'];

        $mysqli->query("UPDATE tableau_student SET name='$name', email='$email', phone='$phone', number='$number', date='$date' WHERE id=$id")
         or die($mysqli->error());

     header("location: student.php");
     $mysqli->close();

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