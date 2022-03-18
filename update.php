
<?php
include("connection.php");


    // update

        $id = $_GET['id'];

        $result = "SELECT * FROM tableau_student WHERE id=$id";
        $sql=mysqli_query($con,$result);
        
        while($row = mysqli_fetch_assoc($sql))
        {
                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $number = $row['number'];
                    $date = $row['date'];
        }

        if(isset($_POST['update'])){

            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $number=$_POST['number'];
            $date=$_POST['date'];

            $result = "UPDATE tableau_student SET name='$name', email='$email', phone='$phone', number='$number', date='$date' WHERE id='$id'" ;
            $sql = mysqli_query($con,$result);

            // if($sql){
                header("location:student.php");
            // }
            
        }

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
        <title>update</title>
    </head>

    <body  >

        <main class="d-flex flex-column justify-content-center align-items-center " 
            style="height: 100vh; background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">

            <form   method="POST" class="p-4 rounded d-flex flex-column justify-content-center" 
                style="width: 30rem; background: linear-gradient( #00C1FE 18.27%, #FAFFC1 91.84%);">

                <input type="hidden" name="id" > 

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="name"   name="name" class="form-control" value="<?php echo $name; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email </label>
                    <input type="email" name="email"  class="form-control" value="<?php echo $email; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">phone</label>
                    <input type="phone" name="phone"  class="form-control" value="<?php echo $phone; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">enroll number</label>
                    <input type="text" name="number"  class="form-control" value="<?php echo $number; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">date of addmision</label>
                    <input type="date" name="date"  class="form-control" value="<?php echo $date; ?>">
                </div> 

                <button type="submit" class="btn btn-primary" name="update">save</button>
            </form>

        </main>

    </body>

</html>