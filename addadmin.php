<?php require 'conn.php'; ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <title>Doctor Mash - Find a Doctor</title>
    </head>

    <body>
      <nav>
          <div class="nav-wrapper">
          <a href="home.php" class="brand-logo">Doctor Mash</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="home.php">Back </a></li>
          <li><a href="logout.php" class="btn waves-effect waves-brown waves-ripple">Logout </a></li>
          </ul>
          </div>
      </nav>
      <br>
      <br>
      <br>
      <br>
      <div align="center">
         <div style="width: 30%" align="center">
             <form method="POST" action="">
                   <div class="row">
                  <div class="input-field col s12">
                      <input id="email" type="email" class="validate" name="email" required="">
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                  </div>
                   </div>
                  <div class="row">
                  <div class="input-field col s12">
                      <input id="password" type="password" class="validate" name="pass" required="">
                    <label for="password">Password</label>
                  </div>
                  </div>
                  <div class="row" id="reg" > 
                  <div class="input-field col s12">
                      <input type="submit" value="Add Admin" id="register" name="register" class="btn waves-effect waves-brown waves-ripple ">
                  </div>
                </div>
                  </form>
          </div>
          </div>
      <br>
    </body>
  </html>

<?php
if(isset($_POST['register'])){
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $pass =  md5(isset( $_POST['pass']) ?  $_POST['pass'] : '');
  $sql = "insert into login (email,password,account_check) values('$email','$pass',0)";
  mysql_query($sql) or die("Table Not Found".mysql_error());
  header('location:home.php');
}
?>