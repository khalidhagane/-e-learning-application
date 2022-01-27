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
    <form class="card p-3 d-flex flex-column  gap-3"  style="width: 23rem; border-radius: 15px;">
        <div>
            <h1 class="border-start border-4 border-info ps-2 fs-3">E-classe</h1>
        </div>
        <div>
            <p class="text-center h5">SIGN IN</p>
            <P class="text-center text-secondary">Enter your credentials to access your account</P>
        </div>
        <div class= "d-flex flex-column gap-4" >
            <div >
                <label  class="form-label">Email</label>
                <input type="email" class="form-control"  placeholder="Enter your email">
            </div>
            <div >
                <label  class="form-label">Password</label>
                <input type="password" class="form-control"  placeholder="Enter your password">
            </div>
            <div class="d-flex flex-column align-items-center gap-3">
  
                    <a href="home.php" class="btn-info btn w-100   text-white text-decoration-none"> SIGN IN </a>
                
                <p class=" text-secondary">Forgot your password? <a href="#" class="text-info"> Reset Password</a></p>
            </div>
        </div>


    </Form>
</div>
</main>

</body>

</html>