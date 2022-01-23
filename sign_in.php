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
<div class=" sign_in d-flex flex-row justify-content-center align-items-center min-vh-100 " style=" background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">
    <form class="card p-3 d-flex flex-column  gap-3"  style="width: 23rem; border-radius: 15px;">
        <div>
            <h1 class="border-start border-4 border-info ps-2 fs-3">E-classe</h1>
        </div>
        <div>
            <p class="text-center h5">SIGN IN</p>
            <P class="text-center text-secondary">Enter your credentials to access your account</P>
        </div>
        <div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control"  placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control"  placeholder="Enter your password">
            </div>
            <div class="d-flex flex-column gap-3">
                
                <button type="submit" class="btn btn-info  w-100">
                    <a href="home.php" class="text-white text-decoration-none"> SIGN IN </a>
                </button>
              
                <p class="text-center text-secondary">Forgot your password? <a href="#" class="text-info"> Reset Password</a></p>
            </div>
        </div>


    </Form>
</div>
</main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>