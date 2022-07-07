<?php
require_once "config.php"; // include cofig.php 

$username = $password = $confirm_password =$email= ""; // 4 variable
$username_err = $password_err = $confirm_password_err=$email_err = ""; // 3 error variable

if ($_SERVER['REQUEST_METHOD'] == "POST"){ // post request paile aitai dukhbe

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Opss Username can not be blank"; // jodi user name empty thake then aita print korbe
       // echo "<p align='center'> <font color=red  size='6pt'> Opss!! Username can not be blank   </font> </p>";
        echo '<script>alert("WOpss!! Username can not be blank ")</script>';

    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?"; // pre -prepare korlam sql query ke
        $stmt = mysqli_prepare($conn, $sql); // stmt = statement , prepare hoye gele
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username); //   perameter ke bind kore dibe  stmt ar songe, paream_username diye

            // Set the value of param username
            $param_username = trim($_POST['username']); // trim= whitespace , newline kete dibe

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt); // if not error then store result
                if(mysqli_stmt_num_rows($stmt) == 1) // statement a number of row  kto gula , jodi age regrister tahke thn
                {
                    $username_err = "This username is already taken";
                    echo " ";
                    //  echo " Opss !! This username is already taken  ";
                  //  echo "<p align='center'> <font color=red  size='6pt'> Opss !! This username is already taken  </font> </p>";
                    // echo '<script>alert("Opss !! This username is already taken  ")</script>';
                    echo '<script>alert("Opss !! This username is already taken  ")</script>';
                }
                else{
                    $username = trim($_POST['username']);// jodi username age theke nah thake thn store korbe username ke
                }
            }
            else{
                echo "Sorry !! Something went wrong";
            }
        }

    }

   // mysqli_stmt_close($stmt); // statement close kore dilam


    if(empty(trim($_POST["email"]))){
        $email_err = "Opss Email can not be blank"; // jodi user name empty thake then aita print korbe
        // echo "<p align='center'> <font color=red  size='6pt'> Opss!! Username can not be blank   </font> </p>";
        echo '<script>alert("Opss!! Email can not be blank ")</script>';

    }
    else{
        $sql = "SELECT id FROM users WHERE email = ?"; // pre -prepare korlam sql query ke
        $stmt = mysqli_prepare($conn, $sql); // stmt = statement , prepare hoye gele
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email); //   perameter ke bind kore dibe  stmt ar songe, paream_username diye

            // Set the value of param username
            $param_email = trim($_POST['email']); // trim= whitespace , newline kete dibe

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt); // if not error then store result
                if(mysqli_stmt_num_rows($stmt) == 1) // statement a number of row  kto gula , jodi age regrister tahke thn
                {
                    $username_err = "This username is already taken";
                    echo " ";
                    //  echo " Opss !! This username is already taken  ";
                    //  echo "<p align='center'> <font color=red  size='6pt'> Opss !! This username is already taken  </font> </p>";
                    // echo '<script>alert("Opss !! This username is already taken  ")</script>';
                    echo '<script>alert("Opss !! This Email is already taken  ")</script>';
                }
                else{
                    $email = trim($_POST['email']);// jodi username age theke nah thake thn store korbe username ke
                }
            }
            else{
                echo "Sorry !! Something went wrong";
            }
        }

    }

    mysqli_stmt_close($stmt); // statement close kore dilam


// Check for password
    if(empty(trim($_POST['password']))){ // password empty naki check kortyci
        $password_err = "Opss !! Password can not be blank";
        echo " ";
        // echo "  Opss !! Password can not be blank  ";
      //  echo "<p align='center'> <font color=red  size='6pt'> Opss !! Password can not be blank </font> </p>";
        echo '<script>alert("Opss!! Password can not be blank ")</script>';

    }
    elseif(strlen(trim($_POST['password'])) < 5){ // password empty nah hole and pass length digit 4 ar kom hole
        $password_err = "Password can not be less than 5 characters";
        echo " ";
        // echo “<td align=centre> <font color=red> Password can not be less than 5 characters </font></td>;
        // echo "<p> <font color=red > Password can not be less than 5 characters  </font> </p>";
       // echo "<p align='center'> <font color=red  size='6pt'>Opsss !!! Password can not be less than 5 characters </font> </p>";
        echo '<script>alert("Opsss !!! Password can not be less than 5 characters")</script>';
    }
    else{
        $password = trim($_POST['password']);// password nibo tahole
    }

// Check for confirm password field ( match or not )
    if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){ // confirm pass jodi pass ar songe match nah hoi thn
        $password_err = "Opss !! Passwords should be matched ";
       // echo "<p align='center'> <font color=red  size='6pt'> Opss !! Passwords should be matched </font> </p>";
        //echo "  Opss !! Passwords should be matched   ";
        echo '<script>alert(" Opss !! Passwords should be matched")</script>';
    }


// If there were no errors, go ahead and insert into the database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))// jodi ai perameter gular value 0 tahe tahole (mane error nah pele )
    {
        $sql = "INSERT INTO users (username, password,email) VALUES (?, ?,?)"; // ? ? karon prepare kortyci
        $stmt = mysqli_prepare($conn, $sql);// read abelity
        if ($stmt)// jodi prepare hoye jai thn
        {
            mysqli_stmt_bind_param($stmt,"sss",$param_username,$param_password,$param_email );//   perameter ke bind kore dibe  stmt ar songe, param diye

            // Set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);// password ke plane text a store korbo nah hash a sotre korbo , jate database hack hoye gelau password kau dekty parbe nah
           // $param_email = password_hash($email, PASSWORD_DEFAULT);// HAS EMAIL
            $param_email = $email;
            // Try to execute the query
            if (mysqli_stmt_execute($stmt))//$stmt = mysqli_prepare($conn, $sql) aita pass korbo
            {
                header("location: login.php");// sob succesful hole redirect kore dibo login.php te
            }
            else{
                //  echo "Opss !! Something went wrong can not redirect , please regrister again !";
               // echo "<p align='center'> <font color=red  size='6pt'> Opss !! Something went wrong can not redirect , please regrister again ! </font> </p>";
                echo '<script>alert("Opss !! Something went wrong can not redirect , please regrister again !")</script>';
            }
        }
        mysqli_stmt_close($stmt);// statement close
    }
    mysqli_close($conn);// database connection close
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="style1.css">

    <title>Joy Ecommerce  Login</title>
  </head>

 <body>   <!--bootstrap dark navbar getbootstrap theke pike korsi -->
  <!-- <body style="background-color:#ffffff">-->

  <div class="container"> <!--top margin 4 -->
    <h3><p class="login-text" style="font-size: 2rem; font-weight: 800;">Please Register Here</p></h3>
<hr>  <!--hr for line , lower line for h3  -->
<form action="" method="post" class="login-email"> <!--action blank and method post kore dice  -->

    <div class="input-group">
        <input type="text" class="form-control" name="username" id="inputEmail4"  placeholder="Please Enter Username"><!--type text -->
    </div>
    <div class="input-group">
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Please Enter Password"><!--type text -->
    </div>
    <div class="input-group">
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password"><!--type text -->
    </div>
  <div class="input-group">
    <input type="text" class="form-control" name ="email" id="email" placeholder="Please Enter E-mail Address">
  </div>
  <div class="input-group">
    <input type="text" class="form-control" id="inputAddress3" placeholder="Please Enter Address">
  </div>
    <div class="input-group">
        <button name="submit" class="btn">Register</button>
    </div>
    <p class="login-register-text">Already have an account? <a href="login.php">Sign in Here</a></p>
</form>
</div>


<!-- close bootstrap , it is pike from getbootstrap-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
