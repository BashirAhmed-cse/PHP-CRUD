<?php
include'conn.php';
$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

  $sql="update crud set id=$id,name='$name',email='$email' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
      header('location:display.php');
  }else{
      die(mysqli_error($con));
  }
}




?>




<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <form class="form-group my-3" method="post">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value=<?php echo $name;?>>
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value=<?php echo $email;?>>
    
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>