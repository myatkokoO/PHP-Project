<?php
error_reporting(1);
session_start();
include('connection.php');


if(isset($_POST['sub']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];//Note: using MD5 for hashing not secure.Consider using stronger hashing algorithms like bcrypt.

  $query = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password'");
  $result = mysqli_fetch_assoc($query);

  if ($result) {
    $_SESSION['uid'] = $result['id'];
    $_SESSION['un'] = $result['name'];
    $_SESSION['email']=$result['email'];
    $_SESSION['phone'] = $result['phone'];
    header("location: index.php");
    exit();
  }else{
    echo "<script>alert('Invalid email or password.Please try again.');</script>";
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zipper - Responsive HTML Template</title>

    <!--

Template 2084 Zipper

http://www.tooplate.com/view/2084-zipper

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

<body background="./img/iphone.jpg" style="background-size:cover;">

        <div class="container-fluid">
            <!-- Navigation -->        
            <div class="tm-nav navfixed">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar"></button> <!-- &#9776; ☰ -->
                    <div class="collapse navbar-toggleable-sm text-xs-center tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link current" href="./index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./iphone.php">i phone</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./order.php">Oreder</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./register.php">Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
              
            

                 <div class="tm-hero">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-uppercase tm-hero-title">I phone 15 promax</h1>
                            <p class="tm-hero-subtitle">Beyound the Dream®</p>
                        </div>
                         
                        
                        <center>
                            <h3>Login</h3>
                            <form method="post" class="tm-contact-form">
                                <input type="email" name="email" placeholder="Email" class="form-control2" /><br/><br/>
                                <input type="password" name="password" placeholder="Password" class="form-control2" /><br/><br/>
                                <span>Create New Account.</span><a href="./register.php">Register</a><br/>
                                <div class="col-12">
                                    <input type="submit" name="sub"  value="LOGIN" class="submit_button btn btn-primary mt-2" />
                                </div>
                            </form>
                        </center>