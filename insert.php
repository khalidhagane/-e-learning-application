
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
  
          <main class="d-flex flex-column justify-content-center align-items-center " 
            style="height: 100vh; background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">

          <form  action="insert.php" method="POST" class="p-4 rounded d-flex flex-column justify-content-center" 
                  style="width: 30rem; background: linear-gradient( #00C1FE 18.27%, #FAFFC1 91.84%);">

                  <input type="hidden" name="id" >

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="name"   name="name"  class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email </label>
                    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                 </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >phone</label>
                    <input type="phone" name="phone"  class="form-control" required >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">enroll number</label>
                    <input type="text" name="number"  class="form-control"required >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">date of addmision</label>
                    <input type="date" name="date"  class="form-control" required >
                </div> 

                <button type="submit" class="btn btn-primary" name="save">save</button>
          </form>

      </main>

  </body>

</html>
 

<?php
//   connection
include 'connection.php';
// isset kat ha9a9 lina man varaile ($_POST) wach 3amar ola khawi
//ila kan 3amar kola valure kat7at liya f varaible dyalha ex: $name=($_POST['name'])

   if(isset($_POST['save'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        
        // insert into -> 7oot liya f tableau_student kola varaible f row dyalo ex: column(name) kan hat fih  varaible $name
        $insert="INSERT INTO tableau_student(name,email,phone,number,date)VALUES('$name','$email','$phone','$number','$date')";
        //mysqli_query -> function kat dir liya l'execution l requete sql li 7ato variable $insert f database (li connecti b $con)
        $query= mysqli_query($con,$insert); 

        if($query){
            // header('location:nom_page') kat raja3ni l page li bghit rja3 liha man ba3d hadak insert li dart ex: header('location: student.php')
            header ('location: student.php');
        }
        mysqli_close($con);
   }

?>