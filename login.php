<?php
//This script will handle login
session_start(); // start session for log in 

// check if the user is already logged in
if(isset($_SESSION['username'])) // jodi user age thkeek e log in thake 
{
    header("location: welcome.php "); // redirect korbo welcome.php te
    exit; // ar por ar code a jabe nah 
}
require_once "config.php";// config for connect db 

$username = $password = ""; //variable 
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){  // jodi post request pai 
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))) // jodi username or password empty  thake 
    {
        $err = " Opss !! Please enter username + password";
      // header("location: login3.php");
        // echo "<p align='center'> <font color=red  size='6pt'> Opss !! Please enter the username and  password to log in </font> </p>";
        //echo " Opss !! Please enter the username and  password to log in  ";
      // echo '<script>alert(" Opss !! Please enter the username and  password to log in ")</script>';
        header("Location: login.php?error= Please enter username & password");
    }
    else{
        $username = trim($_POST['username']);// set username 
        $password = trim($_POST['password']);// set password 
    }


if(empty($err))// kono error nah thakle  
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?"; // user table thke nibe 
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);//   perameter ke bind kore dibe  stmt ar songe, paream_username diye 
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);// store result 
        if(mysqli_stmt_num_rows($stmt) == 1) // user already exist korle thn age jabo , regrister thkakle 
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);// again bind kortyce thn store 
                    if(mysqli_stmt_fetch($stmt))// jodi password thake database a 
                    {
                        if(password_verify($password, $hashed_password))// akn password jodi hash pass ar songe match kore 
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");// redirect kortyce welcome a 
                            
                        }
                        else {
                            //header("location: login3.php ");
                           // echo '<script>alert(" Opss !! password invalid  ")</script>';
                            header("Location:login.php?error= Incorrect User name or password");
                        }
                    }

                }

             }
        }    


    }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


      <link rel="stylesheet" type="text/css" href="style1.css">

    <title>Joy Ecommerce login system!</title>
  </head>
  <body> <!--bootstrap dark navbar getbootstrap theke pike korsi -->

<div class="container mt-4">
<h3><p class="login-text" style="font-size: 2rem; font-weight: 800;">Please Login Here</p></h3>
<form action="" method="post"  class="login-email">

    <?php if (isset($_GET['error'])) { ?>
        <p align='left'> <font color=red  size='5pt'><img src="https://img.icons8.com/material-outlined/24/fa314a/error--v1.png"/><?php echo $_GET['error']; ?></p>
    <?php } ?>
  <div class="input-group">
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Username">
  </div>
  <div class="input-group">

    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Please Enter Password">
  </div>
  <!--<button type="submit" class="btn btn-primary">Submit</button>-->
  <div class="input-group">
      <button name="submit" class="btn">Login</button>
  </div>
  <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
  </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
