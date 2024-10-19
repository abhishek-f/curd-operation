<?php
include("Config.php");
if(isset($_POST["submit"])){
    $studentname = $_POST["Name"];
    $studentemail = $_POST["Mail"];
    $studentmobile = $_POST["Mobile"];
    $studentpassword = $_POST["Password"];
    $studentdescription = $_POST["Description"];
   
    $query = "INSERT INTO `student` (`Name`,`Mail`,`Mobile`,`Password`,`Description`) VALUES ('$studentname','$studentemail','$studentmobile','$studentpassword','$studentdescription')";

    $query_close = mysqli_query($conn,$query);
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <style>
        #h1{
            margin-top: 30px;
            color: gray;
        }
    </style>
<body>
    
<center><h1 id="h1">Student Form</h1></center>
<form method="post">
    <div class="container">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="Name" class="form-control" placeholder="Enter your name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="Mail" class="form-control" placeholder="Enter yourt email">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="Mobile" class="form-control" placeholder="Enter your mobile number">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="Password" class="form-control" placeholder="Enter your password">
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea rows="4" cols="50" name="Description" class="form-control" placeholder="Please enter the description"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 
</div>
</form>

</body>
</html>


