<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>toinks</title>
</head>
<body>

<form class="row g-3" action ="index.php" method = "post" >
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">First Name</label>
        <input type="text" class="form-control" name = "name">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Last Name</label>
        <input type="text" class="form-control" name = "lname">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="text" class="form-control" name = "email">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Gender</label>
        <input type="text" class="form-control" name = "gender">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Birthdate</label>
        <input type="date" class="form-control" name = "bdate">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Address</label>
        <input type="text" class="form-control" name = "address">
    </div>
   
    <div class="col-12">
        <button type="submit" name ="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>

<table class="table table-striped-columns">
    
</table>
 </div>

 <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="submit" class="btn btn-success">Edit</button>
      <button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>

    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="submit" class="btn btn-success">Edit</button>
      <button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>

    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="submit" class="btn btn-success">Edit</button>
      <button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>

    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="submit" class="btn btn-success">Edit</button>
      <button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>

    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td> <a href="test.html">
      <button class="btn btn-success">Edit</button>
      </a> 
      <button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>
   
  </tbody>
</table>

</body>
</html>

<?php
 include 'connection.php';

 $name = $_POST["name"];
 $lname = $_POST["lname"];
 $email = $_POST["email"];
 $gender = $_POST["gender"];
 $bdate = $_POST["bdate"]; 
 $address = $_POST["address"];

if(isset($_POST["submit"]))
{

    if(empty($name) && empty($lname) && empty($email) && empty($gender)  && empty($bdate) && empty($address))
    {
        echo "Missing";
    }
    
    else
    {
        $sql = "INSERT INTO testing (Name,Lastname,Email,Gender,Birthdate,Address)
        VALUES ('$name', '$lname', '$email','$gender','$bdate','$address')";
        mysqli_query($conn,$sql);
    }

}


if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



