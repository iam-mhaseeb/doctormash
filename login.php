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

    <body class="bg">
        <nav>
            <div class="nav-wrapper">
              <a href="index.php" class="brand-logo">Doctor Mash</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="Register.php">Register</a></li>
              </ul>
            </div>
          </nav>
        <br>
        <div align="center">
         <div class="secondary-container" align="center">
             <form method="POST" action="log.php">
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
                  <div class="row">
                  <div class="input-field col s12">
                      <input type="submit" value="LogIn" id="login" name="login" class="btn waves-effect waves-brown waves-ripple ">
                  </div>
                </div>
             </form>
        </div>
         </div>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Doctor Mash</h5>
                <p class="grey-text text-lighten-4">We help you to find best doctor.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Doctor Mash
            <a class="grey-text text-lighten-4 right" href="https://github.com/iam-mhaseeb/doctormash">View Source</a>
            </div>
          </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/js.js"></script>
    </body>
  </html>

