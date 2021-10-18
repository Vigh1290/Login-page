
<?php
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   echo $username;
   $salt = "iusesomecrazystrings22";
   $password = crypt($password,$salt);
   echo "</br>";
   echo $password;
    
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="loginfile.php" method="post">
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="enter your username">
</div>
<div class ="form-group">
<label for="Pssword">Password</label>
    <input type="password" name="password" class="form-control" placeholder="enter your password">
</div>
<input class="btn btn-primary" type="submit" name="submit" value="submit">
</form>
    
</body>
</html>