<?php include 'connection.php';

?>
<div class="col-auto  col-md-3  col-xl-2 asied ">
                
                <div class="d-flex flex-column px-3 pt-2  min-vh-100   ">
                    <div class=" pb-3  me-md-auto ">
                        <h1 class=" border-start border-4 border-info  my-0 ps-2 h3 ">E-classe</h1>   
                    </div>
                    <div class="d-flex flex-column align-items-center ">
                        <img src="image/admin.png" alt="hugenerd" width="90" height="90" class="rounded-circle  mt-1">
                        
                        <h4 class="text-dark mt-3 h6"> <b> <?php if(isset($_SESSION['username']))echo $_SESSION['username']; ?> </b></h4>                                            

                        <p class="text-info m-0">Admin</p>
                    </div>

                    <ul class="nav d-flex flex-column w-100" >
                        <li class=" mt-2 mb-2 text-center  w-100" >
                            <a href="home.php" class="nav-link   text-dark rounded "  >
                                <i class="fal fa-home-lg-alt pe-2 "></i> 
                                <span class=" d-none d-sm-inline  ">Home</span>
                            </a>
                        </li>
                        <li class="mb-2 text-center w-100" >
                            <a href="#"  class="nav-link   text-dark rounded ">
                                <i class="far fa-bookmark pe-2 "></i>
                                <span class=" d-none d-sm-inline">Course</span> 
                            </a>
                        </li>
                        <li class="mb-2 text-center w-100" >
                            <a href="student.php" class="nav-link  text-dark rounded ">
                                <i class="fal fa-graduation-cap pe-2 "></i>
                                <span class=" d-none d-sm-inline">Students</span>
                            </a>
                        </li>

                        <li class="mb-2 text-center w-100" >
                            <a href="payment.php" class="nav-link  text-dark rounded ">
                                <i class="far fa-usd-square  pe-2"></i> 
                                <span class=" d-none d-sm-inline">payment</span>
                            </a>
                        </li>

                        <li class="mb-2 text-center w-100">
                            <a href="#"  class="nav-link  text-dark rounded ">
                                <i class="fal fa-file-chart-line pe-2"></i> 
                                <span class=" d-none d-sm-inline">Report</span>
                            </a>
                        </li>
                        <li class="mb-3  text-center w-100"  >
                            <a href="#"  class="nav-link  text-dark  rounded ">
                                <i class="fal fa-sliders-v-square pe-2"></i> 
                                <span class=" d-none d-sm-inline">Settings</span>
                            </a>
                        </li>

                        <li class="mt-2 text-center w-100 " >
                            <a href="logout.php" class=" nav-link  text-dark rounded ">
                                <span class=" d-none d-sm-inline pe-3 ">Logout</span>
                                <i class="fal fa-sign-out-alt "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>