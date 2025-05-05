<?php
  include("DB_conn/conn.php");
  function sanitize_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

  if(isset($_POST['btn_registration'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
      $email=sanitize_data($_POST['email']);
      $password=sanitize_data($_POST['password']);
      $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
      
      $checkIfUserExitsQuery="SELECT * FROM users  WHERE email='$email'";
      $result=mysqli_query($conn,$checkIfUserExitsQuery);
      if(mysqli_num_rows($result) > 0){
        echo '<div style="padding: 20px; border: 2px solid #f44336; border-radius: 5px; background-color: #f8d7da; color: #721c24; font-family: Arial, sans-serif; direction: ltr; text-align: left;">
        <strong>User Already Exists</strong> You already have an account on our website. 
        <a href="index.php" style="color:rgb(90, 31, 255); text-decoration: none; font-weight: bold;">Login here</a>
        </div>';
      }else{
        $create_account="INSERT INTO users (email,password)
              VALUES('$email','$hashedPassword')";
              $result=mysqli_query($conn,$create_account);
              if($result){
                header("Location: index.php");
              }else{
                echo "<script>alert('Error creating account');</script>";
              }
      }
    }else{
      echo "<script>alert('You Must Fill All Inputs');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <link rel="stylesheet" href="./create.css" />
  </head>
  <body>
    <div class="form-container">
    <form  method="post">
      <h2>Create Account</h2>
      <form id="registerForm">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          placeholder="Please enter your email"
          autofocus
          name="email"
        />

        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          placeholder="Please enter your password"
          name="password"
        />

        <button type="submit" name="btn_registration">Sign Up</button>
      </form>
    </div>
    <script src="./create.js"></script>
  </body>
</html>