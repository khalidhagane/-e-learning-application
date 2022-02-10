
<?php 
 require_once 'connection.php';       
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
      <title>insert</title>
  </head>

  <body  >
  <?php require_once'connection.php';?>

          <main class="d-flex flex-column justify-content-center align-items-center " 
            style="height: 100vh; background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">

          <form  action="connection.php" method="POST" class="p-4 rounded d-flex flex-column justify-content-center" 
                  style="width: 30rem; background: linear-gradient( #00C1FE 18.27%, #FAFFC1 91.84%);">

                  <input type="hidden" name="id" value="<?php echo $id;?>">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="name"   name="name" value="<?php echo $name; ?>" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email </label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">phone</label>
                    <input type="phone" name="phone" value="<?php echo $phone; ?>" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">enroll number</label>
                    <input type="text" name="number" value="<?php echo $number; ?>" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">date of addmision</label>
                    <input type="date" name="date" value="<?php echo $date; ?>" class="form-control" >
                </div> 




                <button type="submit" class="btn btn-primary" name="update">save</button>
          </form>

      </main>

  </body>

</html>