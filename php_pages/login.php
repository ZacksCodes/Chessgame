<?php session_start() ;
if (isset($_SESSION['username']))
{
   header('location:UserLogin.php');
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css">
   <link rel="icon" href="../favicon.ico" />
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">

         <div class="login-main-text">  
            <h2 style="min-width:800px" >are you tired of playing classical chess?</h2>
            <h2>welcome to CopyCat</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
                  <div class="form-group">
                     <div id="login_msg" style="font-size: 12px;color:red;"></div>
                     <label>User Name</label>
                     <input type="text" class="form-control"  id="username" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <button type="submit" id="submit" class="btn btn-black" onclick="login()">Login</button>
               <button type="submit"  id="registerButton" onclick="parent.location='register_form.php'"  class="btn btn-secondary">Register</button>
            </div>
<script type="text/javascript"> function login()
{
var username = $("#username").val(); // id=lMoveSQL finns i main.php
var password = $("#password").val();
 $.post('check_login.php',{username: username,password: password}, function(data)
{
 if (data.loggedin == "true"){
   window.location.href = "UserLogin.php";
   }
   else{
      $('#login_msg').text(data.msg);
   }

        },"json");

}
</script>
   </div>
</div>