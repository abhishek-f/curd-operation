<?php
include ("Config.php");
$query = "SELECT * FROM `student`";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
        #h1{
            margin-top: 20px;
            margin-bottom: 20px;
            color: gray;
        }
        .btn{
            margin-bottom:20px;
        }
    </style>
<body>
<div class="container">
    <center><h1 id="h1">Student data</h1></center>
    <button class="btn" type="submit" name="submit" class="text-light" class="btn btn-primary"><a href="Insert.php">Add user</a></button>
    <table border="1" class="table table-striped">
    <thead>
<tr>
    <th>Student id</th>
    <th>Student name</th>
    <th>Student mail</th>
    <th>Student mobile</th>
    <th>Student password</th>
    <th>Student description</th>
    <th>Update</th>
    <th>Delete</th>
</tr>
    </thead>
    <tbody>
        <?php while( $row = mysqli_fetch_assoc($result)) {?>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["Name"];?></td>
    <td><?php echo $row["Mail"];?></td>
    <td><?php echo $row["Mobile"];?></td>
    <td><?php echo $row["Password"];?></td>
    <td><?php echo $row["Description"];?></td>
    <td><a href="Update.php?id=<?php echo $row["id"];?>">Update</a></td>
    <td><a href="Delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
</tr>
<?php } ?>
    </tbody>
    </table>
    </div>
</body>
</html>