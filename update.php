<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>WebApi</title>
</head>
<body>

<?php 
  $id=$_GET['ID'];
  $name=$_GET['Name'];
  $address = $_GET['Address'];
  $contact = $_GET['Contact'];
  $jobTitle = $_GET['JobTitle'];
  echo $contact,$jobTitle;
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <form action="http://192.168.0.1:8081/web-api/database.php" method="post">
                <input type="hidden" name="url" value="http://localhost:8081/client/retrieve.php">
                <input type="hidden" name='id' value="<?=$id?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" name="name" value="<?=$name?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address" value="<?=$address?>" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="contact">contact</label>
                    <input type="number" name="contact" value="<?=$contact?>" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="jobTitle">jobTitle</label>
                    <input type="text" name="jobTitle" value="<?=$jobTitle?>" class="form-control" aria-describedby="emailHelp">
                </div>
                <button type="submit" name="update" class="btn btn-info">Update</button>
            </form>
          </div>
        </div>
        </div>
    </div>
</body>
</html>