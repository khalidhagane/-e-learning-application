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
    <title>payment</title>
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

                <div class="col ">

                    <div class="container-fluid   ">
                        <div class="d-flex justify-content-between  border-bottom bg-light px-1 py-2">
                            <h1 class="fw-bold h3">Payments Details</h1>
                            <i class="far fa-sort me-3 fs-6 text-info  pt-2"></i>
                        </div>

                        <table class="table table-hover table-striped">
                            <thead >
                                 <tr style=" display: none; "> 
                                    <th scope="col">pour accessibilité </th>
                                    <th scope="col">pour accessibilité</th>
                                    <th scope="col">pour accessibilité</th>
                                    <th scope="col">pour accessibilité</th>
                                    <th scope="col">pour accessibilité</th>
                                    <th scope="col">pour accessibilité</th>
                                    <th scope="col">pour accessibilité</th> 

                                </tr> 
                            </thead>
                            <tbody class="border-top-0">
                                 <tr>
                                    <td class="text-secondary">Name</td>
                                    <td class="text-secondary">Payment Schedule</td>
                                    <td class="text-secondary">Bill Number</td>
                                    <td class="text-secondary">Amount Paid</td>
                                    <td class="text-secondary">Balance amount</td>
                                    <td class="text-secondary" colspan="2">Date</td>
                                </tr>
                                <tr>
                                    <td class="text-black">Karthi</td>
                                    <td class="text-black">First</td>
                                    <td class="text-black">00012223</td>
                                    <td class="text-black">DHS 100,000</td>
                                    <td class="text-black">DHS 500,000</td>
                                    <td class="text-black">05-Jan,2022</td>
                                    <td><i class="bi bi-eye text-info"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-black">Karthi</td>
                                    <td class="text-black">First</td>
                                    <td class="text-black">00012223</td>
                                    <td class="text-black">DHS 100,000</td>
                                    <td class="text-black">DHS 500,000</td>
                                    <td class="text-black">05-Jan,2022</td>
                                    <td><i class="bi bi-eye text-info"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-black">Karthi</td>
                                    <td class="text-black">First</td>
                                    <td class="text-black">00012223</td>
                                    <td class="text-black">DHS 100,000</td>
                                    <td class="text-black">DHS 500,000</td>
                                    <td class="text-black">05-Jan,2022</td>
                                    <td><i class="bi bi-eye text-info"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-black">Karthi</td>
                                    <td class="text-black">First</td>
                                    <td class="text-black">00012223</td>
                                    <td class="text-black">DHS 100,000</td>
                                    <td class="text-black">DHS 500,000</td>
                                    <td class="text-black">05-Jan,2022</td>
                                    <td><i class="bi bi-eye text-info"></i></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


        </div>
    </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>