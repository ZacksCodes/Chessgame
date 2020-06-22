<?php session_start() ;?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css">
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
               <div id="infoSQL" style="font-size: 12px;color:red;" ></div>
               <div class="field">
                  <div id="infoSQL" ></div>
                     <label for="regusername">Choose a username</label>
                     <input type="text"class="form-control" name="regusername" id="regusername" value="" required>
                  </div>
                  <div class="field">
                     <label for="regpassword">Choose a password</label>
                     <input type="password"class="form-control" name="regpassword" id="regpassword" required>
                  </div>
                  <div class="field">
                     <label for="regpassword_again">Enter your password again</label>
                     <input type="password"class="form-control" name="regpassword_again" id="regpassword_again"  required >
                  </div> </br>
                  <button type="submit" id="register_submit" value="register_submit" onclick="check_pass();"class="btn btn-black">register</button>
                  <button type="submit" id="submit" class="btn btn-black" onclick="parent.location='login.php'">Login</button>
                  <script type="text/javascript">function check_pass()
               {
                  var regusername = $("#regusername").val(); // id=lMoveSQL finns i main.php
                  var regpassword = $("#regpassword").val();
                  var regpassword_again = $("#regpassword_again").val();
                  if (regpassword_again!=regpassword)
                  {
                   $('#infoSQL').text("passwords does not correspond, try again");
                  regpassword = $("#regpassword").val('');
                  regpassword_again = $("#regpassword_again").val('');
                  }
                  else
                  {
                   $.post('register.php',{regusername: regusername,regpassword: regpassword}, function(data)
                     {
                       
                       if (data.loggedin == "true"){

                      window.location.href = "login.php";
                     }
                     else{
                        $('#infoSQL').text(data.msg);
                     }
                  
               },"json");
                  }
               }
               </script>
            </div>
         </div>
      </div>


