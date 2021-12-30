<?php
if (isset($_POST['login'])) {
    $users = array(
        array("user" => "areejfazeela16@gmail.com", "password" => "fazeela16", "name" => "fazeela"),
        array("user" => "tahafizamemon@gmail.com", "password" => "tahafiza", "name" => "tahafiza"),
        array("user" => "fazeela6@gmail.com", "password" => "fazeela6", "name" => "fazeela"),
    );

    $user_email = $_POST['user-email'];
    $user_password = $_POST['user-password'];


    foreach ($users as  $user) {
        if ($user['user'] == $user_email && $user['password'] == $user_password) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location: home.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include_once('navbar.php') ?>

    <div class="d-flex justify-content-center mt-5">

        <form action="" method="post">
            <div class="container" style="width: 450px; height: 300px; background-color: lightgrey">
                <br>
                <center><label style="font-size: 40px; margin-top: -10px"><b> login form </label></b></center>
                <label style="margin-left: 30px; margin-top: 15px"><b>Username</label> 
                <br>
                <input class="col-10" style="margin-left: 30px ;margin-left: 30px"mtype="email" name="user-email" required style="background-color: lightblue">
            <div>
                <br>
                <label style="margin-top: 1px; margin-left: 30px">Password</label> <br>
                <input class="col-10" style="margin-left: 30px" type="password" name="user-password" required>
            </div>
            <input type="submit" name='login' value='LOGIN' class="btn btn-outline-success mt-3 btn-block" style="margin-left: 160px">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>