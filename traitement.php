<?php
session_start();
include 'connection.php';      

        if(isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            if(empty($email) && empty($password)){
                header('location: sign_in.php?error=email or password non remplit');
            }
            else{
                        $query = "SELECT * FROM comptes WHERE email = '$email' and password = '$password'";
                            $result = mysqli_query($con,$query);
                   
                    if(isset($result)){
                        $row= mysqli_fetch_assoc($result);        
                                              
                        if($row['email'] === $email && $row['password'] === $password){ 

                                $_SESSION['username'] = $row['username'];
                    
                                if(isset($_POST['remember'])){
                                    setcookie('email', $email,time()+10);
                                    setcookie('password', $password,time()+10);
                                }
                                 
                                header('location: home.php');
                        }
                        else{
                            header('location: sign_in.php?error=email or password incorrect');
                        }

                    }
                    else{
                        header('location: sign_in.php?error=email or password incorrect');
                    }
            }
        }
        else{
            header('location: sign_in.php?error=email or password non remplit');
        }
?>