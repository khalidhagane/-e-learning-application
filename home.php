<?php
    session_start();
    if(empty($_SESSION['username'])){
        header('location:sign_in.php');
    }
?>

<?php 

include 'coumpteur.php';

include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title> home </title>
</head>

<body>
<main>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- asied -->
            <?php include 'asied.php' ?>
            <!-- asied -->
            <div class="col ">
                <!-- nnavbar -->
            <?php include 'navbar.php' ?>
                <!-- nnavbar -->
                <div class="d-flex flex-wrap justify-content-around gap-3">
                

                    <div class="card" style="width: 14rem;background-color:#F0F9FF;">

                        <div class="card-body">
                            
                            <i class="far fa-graduation-cap h3 text-info "></i>
                            <p class="text-secondary"><?php /* echo $_SESSION['email'] */ ?>student</p>
                        
                            <div class='float-end fw-bolder fs-3'> <?php echo $compteur_std ?> </div>
                        
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;background-color: #FEF6FB;">
                        <div class="card-body">
                            <i class=" col-3 bi bi-bookmark h3"  style="color: #e7b9dc;"></i>
                            <p class="text-secondary">cours</p>
                            <p class="float-end fw-bolder fs-3"> <?php echo $compteur_crs ?> </p>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem; background-color:#FEFBEC;">

                        <div class="card-body">
                            
                            <i class="fal fa-usd-square h3 text-info"></i>
                            <p class="text-secondary">payment</p>
                            <div class="d-flex align-items-center float-end">
                                
                                <p class="fw-bolder fs-3 ps-1"> <?php echo $sum;?> </p>
                                <h5>DHS</h5>                                  

                            </div>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;background-image: linear-gradient(20deg,#00C1FE,#FAFFC1);">
                        <div class="card-body">
                            
                            <i class="fal fa-user h3 text-white"></i>
                            <p class="text-secondary">users</p>
                            <p class="float-end fw-bolder fs-3"><?php echo $coumpteur_user;?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

</body>

</html>
