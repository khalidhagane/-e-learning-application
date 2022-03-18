<?php
include 'connection.php';
session_start();
?>
<?php
    //   connection
    include 'connection.php';
    
    $error_pass = "";
    $error_email = "";

    if(isset($_POST['submit_up'])){
        
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password_2= $_POST['password_2'];

        $query =" SELECT * from comptes where email = '$email' ";
        $data = mysqli_query($con,$query);

        if(mysqli_num_rows($data)>0){
            $error_email = 'this email already exist';
        }
        else if($password_2 !== $password ){
            $error_pass = "password aren't match";
        }
        else{
        $insert="INSERT INTO comptes (username,email,password)VALUES('$username','$email','$password')";
        
        // $query= mysqli_query($con,$insert); 
        // var_dump($insert);
        if(mysqli_query($con,$insert)){

            $_SESSION['username']=$username;
            header('location:home.php');
        }
        mysqli_close($con);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    
    <title>sign_up</title>
</head>

<body  >
    <main>
    <div class=" d-flex flex-row justify-content-center align-items-center min-vh-100 " style=" background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">
        <form onsubmit="verifier(event)" action="sign_up.php" method="POST" class="card p-3 d-flex flex-column  "  style="width: 23rem; border-radius: 15px;">
    <div>

            <h1 class="border-start border-4 border-info ps-2 fs-3">E-classe</h1>
        </div>
        <div>
            <p class="text-center h5">SIGN UP</p>
            <P class="text-center text-secondary">Enter your credentials to access your account</P>
            <p class=" alert-danger  rounded"></p> 
        </div>
        <!-- affichage error -->
        <?php 
            echo "<p class=\" alert-danger  rounded\" > $error_pass $error_email </p>"
            
        ?>

        <div class= "d-flex flex-column gap-3" >
            <div class= "d-flex flex-column" >
                
                <label  class="form-label">username</label>
                <input type="text" name="username" class="form-control"  placeholder="username"  >  
            
            </div>
            <div >
                <label  class="form-label">Email</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter your email"  >   
            </div>

            <div >
                <label  class="form-label">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Enter your password" >
            </div>
            <div >
                <label  class="form-label">confirme password</label>
                <input type="password" name="password_2" class="form-control"  placeholder="Enter your password" >
            </div>

            <div class="d-flex flex-column align-items-centergap-2 ">
                <button  type="submit" name = "submit_up" class="btn-info btn w-100 text-white text-decoration-none"> SIGN UP </button>
            </div>
            <div >
            <p class=" text-secondary ">Déja inscrit(e)? <a href="sign_in.php" class="text-info"> s'identifier</a></p>
            </div>
        
        </div>
    </Form>
</div>
</main>

<script src="main.js"></script>
</body>

</html>

