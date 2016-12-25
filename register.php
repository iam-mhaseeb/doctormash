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
                <li><a href="login.php">Login</a></li>
              </ul>
            </div>
          </nav>
        <br>
        
         <div align="center">
         <div class="secondary-container" align="center">
             <form method="POST" action="reg.php">
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
                    <p>
                        <input name="group1" type="radio" id="doc" value="doc" />
                    <label for="doc">Doctor</label>
                  </p>
                  <p>
                      <input name="group1" type="radio" id="pat" value="pat" />
                    <label for="pat">Patient</label>
                     </p>
                  </div>
                   </div>
                 <div id="doctor" hidden="">
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="name" type="text"  name="name" >
                            <label for="name">Name</label>
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="degree" type="text"  name="degree" >
                            <label for="degree">Degree</label>
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="spcial" type="text"  name="special" >
                            <label for="special">Specialization</label>
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="fee" type="number"  name="fee" >
                            <label for="fee">Fee</label>
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <label for="timefrom">Time From</label><br>
                            <input id="timefrom" type="time"  name="timefrom" >
                           
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <label for="timeto">Time To</label><br>
                            <input id="timeto" type="time"  name="timeto" >
                            
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="phone" type="number"  name="phone" >
                            <label for="phone">Phone#</label>
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="adress" type="text"  name="adress" >
                            <label for="adress">Adress</label>
                        </div>
                      </div>
                 </div>
                  <div id="patient1" hidden="">
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="pname" type="text"  name="pname" >
                            <label for="pname">Name</label>
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="age" type="number"  name="age">
                            <label for="age">Age</label>
                        </div>
                      </div>
                        <div class="row"> 
                  <div class="input-field col s12">
                    <p>
                        <input name="group2" type="radio" id="m" value="male" />
                    <label for="m">Male</label>
                  </p>
                  <p>
                      <input name="group2" type="radio" id="f" value="female" />
                    <label for="f">Female</label>
                     </p>
                  </div>
                   </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="pphone" type="number"  name="pphone"  >
                            <label for="pphone">Phone#</label>
                        </div>
                      </div>
                     <div class="row"> 
                        <div class="input-field col s12">
                            <input id="padress" type="text"  name="padress" >
                            <label for="padress">Adress</label>
                        </div>
                      </div>
                 </div>
                 <div class="row" id="reg" hidden=""> 
                  <div class="input-field col s12">
                      <input type="submit" value="Register" id="register" name="register" class="btn waves-effect waves-brown waves-ripple ">
                  </div>
                </div>
                 <br>
                 <br>
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