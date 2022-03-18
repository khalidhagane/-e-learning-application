<?php
include 'connection.php';

// session_start();

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
    
    <title>sign_in</title>
</head>

<body  >
    <main>
    <div class=" d-flex flex-row justify-content-center align-items-center min-vh-100 " style=" background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">
        <form action="traitement.php" method="POST" class="card p-3 d-flex flex-column  gap-3"  style="width: 23rem; border-radius: 15px;">
    <div>
            <h1 class="border-start border-4 border-info ps-2 fs-3">E-classe</h1>
        </div>
        <div>
            <p class="text-center h5">SIGN IN</p>
            <P class="text-center text-secondary">Enter your credentials to access your account</P>
            <p class=" alert-danger  rounded"></p> 
        </div>
        <!-- affichage error -->
        <?php if(isset($_GET['error'])){ ?>

        <p class="alert alert-danger" role="alert">
            <?php echo $_GET['error'];?>

        <?php } ?>
        </p>          

        <div class= "d-flex flex-column gap-4" >
            <div >
                <label  class="form-label">Email</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter your email" value= "<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>" >   
                
            </div>

            <div >
                <label  class="form-label">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Enter your password" value= "<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">

            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label" >Remember me </label>
            </div>

            <div class="d-flex flex-column align-items-center gap-2">
            
                <button  type="submit" name = "submit" class="btn-info btn w-100 text-white text-decoration-none"> SIGN IN </button>
            
                <p class=" text-secondary">Forgot your password? <a href="#" class="text-info"> Reset Password</a></p>
                <p class=" text-secondary">vous débutez sur eclass? <a href="sign_up.php" class="text-info">s'inscrire</a></p>
            </div>
            
        </div>
    </Form>
</div>
</main>

</body>

</html>