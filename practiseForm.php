<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practise form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3 shadow-sm bg-light" >
    <h4>Teachers Information</h4>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];

        

       //connecting to the Database
       $servername="localhost";
       $username="root";
       $password="";
       $database="teacher";
        //create a connection
   $conn = mysqli_connect($servername,$username,$password,$database);
   //Die if connection was not successful
   if(!$conn){
       die("Sorry we failed to connedt: ". mysqli_connect_error());
   }
   else{
       $sql= "INSERT INTO `teacherinfo` (`name`, `email`, `concern`, `doj`) VALUES ( '$name', '$email', '$desc', current_timestamp())";
       $result=mysqli_query($conn, $sql);

       if($result){
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
       }
       else{
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Your entry has not been submitted!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
       }
   }

    }

    ?>
<form action="/PHP_Exercises/practiseForm.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="name" >
    
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  
  <div class="mb-3">
      <label for="desc">Description</label>
      <textarea id="desc" name="desc" class="form-control" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>