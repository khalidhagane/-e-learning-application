
 <?php 
 

 require_once 'connection.php';
 
 
        
 ?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">
    <title>student</title>
</head>

<body>
    
<main>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            
            <!-- asied -->
            <?php include 'asied.php' ?>
            <!-- asied-->

            <div class="col ">

                <!-- nnavbar -->
             <?php include 'navbar.php' ?>
                <!-- nnavbar -->
                           
                    <div class="bg-light py-2  ">
                    <div class="d-flex  align-items-center  justify-content-center justify-content-sm-between  mt-3">
                            <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">student list</h1>
                            <div class="d-flex align-items-center">
                                <i class="far  fa-sort me-3 fs-6 text-info "></i>
                                
                                    <a href="insert.php"  class=" btn btn-info  text-white text-uppercase mx-4 py-2 " >
                                        add new student
                                    </a> 
                                
                            </div>
                        </div>
                        <hr>
                        
                        
                            <div class="container ">
                                <div class="table-responsive-sm table-responsive-md  px-4">
                                    <table class="table  table-borderless ">
                                        <thead>
                                            <tr class="text-capitalize  ">
                                                <th  style="visibility: hidden;" >a</th>
                                                <th class="text-muted h6 ">name</th>
                                                <th class=" text-muted h6">email</th>
                                                <th class=" text-muted h6">phone</th>
                                                <th class="text-muted h6">enroll number</th>
                                                <th class=" text-muted h6">date of addmision</th>
                                                <th style="display: none;">a</th>
                                                <th style="display: none;">a</th>
                                            </tr>
                                        </thead>

                                        <tbody>                                         
                                           
                                           <?php
                                           while ($row= $result->fetch_assoc()): ?>

                                                     <tr class="bg-white ">
                                                <td  ><img src="image/student.jpg" width="65" alt="image représente étudiants"> </td>
                                                
                                                <td> <?php echo$row['name'];?></td>
                                                <td> <?php echo$row['email'];?></td>
                                                <td> <?php echo$row['phone'];?></td>
                                                <td> <?php echo$row['number'];?></td>
                                                <td> <?php echo$row['date'];?></td>

                                                <td><a href="#"><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                                <td><a href='connection.php?delete=<?php echo $row['id'];?>'> <i class="fal fa-trash fs-6 text-info"></i> </a></td>
                                                </tr>

                                            <?php
                                             endwhile ;?>
                                               
                                              
                                             <?php
                                              //  include 'tableux_students.php'

                                              //   $array = file_get_contents('tableau_student.json');
                                              //   $student = json_decode( $array,true) 
                                             ?>
 
                                           <?php
                                            //    foreach ($student as $TB ){
                               
                                            //    if($TB['name']=='khalid'){

                                            // echo ' <tr class="bg-white ">
                                            // <td  ><img src="image/student.jpg" width="65" alt="image représente étudiants"> </td>
                                            // <td>'.$TB['name'].'</td>
                                            // <td >'.$TB['email'].'</td>
                                            // <td >'.$TB['phone'].'</td>
                                            // <td>'.$TB['enroll_number'].'</td>
                                            // <td >'.$TB['date_of_addmision'].'</td>
                                            // <td><a href="#"><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                            // <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                                            // </tr>';
                                            // //   }
                                            // }
                                       

                                         // for ($i = 0; $i < count($student);$i++) {
                                        //     echo'<tr class="bg-white ">';
                                        //     echo '<td  ><img src="image/student.jpg" width="65" alt="image représente étudiants"> </td>';
                                        //     echo '<td>'. $student[$i]['name'].'</td>';
                                        //     echo '<td>'. $student[$i]['email'] .'</td>';
                                        //     echo '<td>'. $student[$i]['phone'] .'</td>';
                                        //     echo '<td>'. $student[$i]['enroll_number'] .'</td>';
                                        //     echo '<td>'. $student[$i]['date_of_addmision'] .'</td>' ;
                                        //     echo ' <td><a href="#"><i class="fal fa-pen fs-6 text-info"></i></a></td>';
                                        //     echo '<td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>';
                                        //     echo '</tr>';
                                        // }

                                           ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                    </div>

            </div>
        </div>
    </div>
</main>

</body>

</html>