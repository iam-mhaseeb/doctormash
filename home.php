<?php 
require 'conn.php'; 
include("simple_html_dom.php");
?>
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
<?php
session_start();
if(!isset($_SESSION["account_type"])){ header('Location: login.php ');}
if($_SESSION["account_type"]==0){//admin
    ?>
    <nav>
            <div class="nav-wrapper">
                <a href="home.php" class="brand-logo">Doctor Mash</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                   <li><a href="addadmin.php">Add Admin </a></li>
                    <li><a href="logout.php" class="btn waves-effect waves-brown waves-ripple">Logout </a></li>
              </ul>
            </div>
          </nav>
            <br>
            <div align="center">
                <div class="center-align">
                        <h3>Showing All Doctors</h3>
            <table>
            <?php
            $sql = "select * from doctors";
            $result = mysql_query($sql) or die("Table Not Found".mysql_error());
            while ($row=mysql_fetch_array($result)) {
             ?>
                    <form action="" method="POST">
                    <tr>
                    <div class="row">
                        <div class="col s12 m6">
                          <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <input type="text" name="did" hidden="" value="<?php echo $row['id']; ?>">
                                <span class="card-title"><?php echo $row['name']; ?></span>
                                <p>
                                    Qualifcation : <?php echo $row['qualification']; ?><br>
                                    Specialization: <?php echo $row['specialization']; ?><br>
                                    Fee : <?php echo $row['fee']; ?><br>
                                    Time From : <?php echo $row['timefrom']; ?><br>
                                    Time To: <?php echo $row['timeto']; ?><br>
                                    Phone#: <?php echo $row['phone']; ?><br>
                                    Adress: <?php echo $row['location']; ?>
                                </p>
                            </div>
                            <div class="card-action">
                              <input type="submit" name="deld" value="Delete This Doctor" class="btn waves-effect waves-brown waves-ripple">
                            </div>
                          </div>
                        </div>
                      </div>
                        </tr>
                        </form>
            <?php
            }
            ?>
            </table>
            </div>
            </div>
            <br>
            <div align="center">
                 <div class="center-align">
                        <h3>Showing All Patients</h3>
            <table>
            <?php
            $sql = "select * from patients";
            $result = mysql_query($sql) or die("Table Not Found".mysql_error());
            while ($row=mysql_fetch_array($result)) {
             ?>
                    <form method="POST">
                    <tr>
                    <div class="row">
                        <div class="col s12 m6">
                          <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <input type="text" name="dip" hidden="" value="<?php echo $row['id']; ?>">
                                <span class="card-title"><?php echo $row['name']; ?></span>
                                <p>
                                    Age : <?php echo $row['age']; ?><br>
                                    Gender: <?php echo $row['gender']; ?><br>
                                    Phone#: <?php echo $row['phone']; ?><br>
                                    Adress: <?php echo $row['address']; ?>
                                </p>
                            </div>
                            <div class="card-action">
                               <input type="submit" name="delp" value="Delete This Patient" class="btn waves-effect waves-brown waves-ripple">
                            </div>
                          </div>
                        </div>
                      </div>
                        </tr>
                        </form>
            <?php
            }
            ?>
            </table>
            </div>
            </div>
           
            <?php
}
else if($_SESSION["account_type"]==1){//doctor
?>
         <nav>
            <div class="nav-wrapper">
                <a href="home.php" class="brand-logo">Doctor Mash</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                   <li><a href="del.php">Delete Account </a></li>
                    <li><a href="logout.php" class="btn waves-effect waves-brown waves-ripple">Logout </a></li>
              </ul>
            </div>
          </nav>
        <br>
        <div class="center-align">
             <div id="upd1"> 
            <?php
            $id = $_SESSION["uid"];
            $sql = "select * from doctors where id = '$id' ";
            $result = mysql_query($sql) or die("Table Not Found".mysql_error());
            while ($row=mysql_fetch_array($result)) {

		echo "<form method=post>";
                                        echo "Name : " . $row['name'];
                                        echo '<br>';
                                         echo "Degree : " . $row['qualification'];
                                         echo '<br>';
                                          echo "Specialization : " . $row['specialization'];
                                          echo '<br>';
                                         echo "Fee : " . $row['fee'];
                                          echo '<br>';
                                           echo "Time From : " . $row['timefrom'];
                                           echo '<br>';
                                            echo "Time To : " . $row['timeto'];
                                            echo '<br>';
                                             echo "Phone : " . $row['phone'];
                                             echo '<br>';
                                              echo "Adress : " . $row['location'];
                                              echo '<br>';
                                              echo '  <input type="submit" value="Update" id="update" name="update" class="btn waves-effect waves-brown waves-ripple ">';
		echo "</form>";
                ?>
            </div>
            <?php
	}
                if(isset($_POST['update'])){
                    ?>
                    
                    <?php
                    $sql = "select * from doctors where id = '$id' ";
                    $result = mysql_query($sql) or die("Table Not Found".mysql_error());
                   while ($row=mysql_fetch_array($result)) {
		echo "<form method=post action=update.php>";
                ?>
            <div align="center">
                <div class="center-align" style="width:50%">
                            <input id="name" type="text"  name="name" value="<?php echo $row['name'];?>">
                            <label for="name">Name</label>
                            <input id="degree" type="text"  name="degree" value="<?php echo $row['qualification']; ?>">
                            <label for="degree">Degree</label>
                            <input id="spcial" type="text"  name="special" value="<?php echo $row['specialization']; ?>">
                            <label for="special">Specialization</label>
                            <input id="fee" type="number"  name="fee" value="<?php echo $row['fee']; ?>">
                            <label for="fee">Fee</label>
                            <input id="timefrom" type="time"  name="timefrom" value="<?php echo $row['timefrom'] ?>" />
                            <label for="timefrom">Time From</label>
                            <input id="timeto" type="time"  name="timeto" value="<?php echo $row['timeto']; ?>">
                            <label for="timeto">Time To</label>
                            <input id="phone" type="number"  name="phone" value="<?php echo $row['phone']; ?>">
                            <label for="phone">Phone#</label>
                            <input id="adress" type="text"  name="adress" value="<?php echo $row['location']; ?>"/>
                            <label for="adress">Adress</label>
                
            </div>
            </div>
                                
                 <?php
                                              echo '  <input type="submit" value="Update" id="submit" name="submit" class="btn waves-effect waves-brown waves-ripple ">';
		echo "</form>";
                ?>
                            <?php
               
                echo '<br>';
                echo '<br>';
	}
                }
            ?>
      </div>
<?php
}
else if($_SESSION["account_type"] == 2) {//patient
    ?>
    <nav>
            <div class="nav-wrapper">
                <a href="home.php" class="brand-logo">Doctor Mash</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                   <li><a href="del.php">Delete Account </a></li>
                    <li><a href="logout.php" class="btn waves-effect waves-brown waves-ripple">Logout </a></li>
              </ul>
            </div>
          </nav>
        <br>
        <form method="POST">
        <div align="center">
        <div class="center-align" style="width:50%">
            <label for="search">Search Here</label>
            <br>
             <input placeholder="Enter specialist you need" id="searchbar" name="searchbar" type="text" required="">
            <input placeholder="Enter city" id="citysearchbar" name="citysearchbar" type="text" required="">
               <input type="submit" value="Search" id="search" name="search" class="btn waves-effect waves-brown waves-ripple ">
        </div>
        </div>
        </form>
      <?php
      
      if(isset($_POST['search'])){
          $search = $_POST['searchbar'];
          $citysearch = $_POST['citysearchbar'];
           $sql = "select * from doctors where specialization like '%$search%' ";
            $result = mysql_query($sql) or die("Table Not Found".mysql_error());
            ?>
        <table>
            
        <?php
            while ($row=mysql_fetch_array($result)) {
             ?>
                    <tr>
                    <div class="row">
                        <div class="col s12 m6">
                          <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title"><?php echo $row['name']; ?></span>
                                <p>
                                    Qualifcation : <?php echo $row['qualification']; ?><br>
                                    Specialization: <?php echo $row['specialization']; ?><br>
                                    Fee : <?php echo $row['fee']; ?><br>
                                    Time From : <?php echo $row['timefrom']; ?><br>
                                    Time To: <?php echo $row['timeto']; ?><br>
                                    Phone#: <?php echo $row['phone']; ?><br>
                                    Adress: <?php echo $row['location']; ?>
                                </p>
                            </div>
                          </div>
                        </div>
                      </div>
                        </tr>
            <?php
            }
            ?>
    </table>
      
                        <?php
                         // $url = "https://www.google.com/search?q='$search'+doctors+in+lahore"; 
                         $url = "http://findadoctor.com.pk/search/'$citysearch'/'$search'" ;                                                   
                          $html = file_get_html($url);
                          $articles = array();
                          foreach($html->find('div.divRoot') as $element) {
                            if(isset($element->find('span.lblProfileName', 0)->plaintext))
                              $item['name'] = $element->find('span.lblProfileName', 0)->plaintext;
                            else
                              $item['name'] = null;
                            if(isset($element->find('span.txtTagLine', 0)->plaintext))
                              $item['education'] = $element->find('span.txtTagLine', 0)->plaintext;
                            else
                              $item['education'] = null;
                            if(isset($element->find('span.txtSpeciality', 0)->plaintext))
                             $item['spec'] = $element->find('span.txtSpeciality', 0)->plaintext;
                            else
                              $item['spec'] = null;
                            if(isset($element->find('div#ctl00_cph_gv_ctl02_uc_divParct',0)->plaintext)){
                              $item['address'] = $element->find('div#ctl00_cph_gv_ctl02_uc_divParct', 0)->plaintext;
                            }
                            else
                              $item['address'] = null;
                            
                            $articles[] = $item;
                          }
                           foreach ($articles as $doctor) {
                          ?>
                          <table>
                          <tr>
                          <div class="row">
                          <div class="col s12 m6">
                          <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title"><?php echo $doctor['name']; ?></span>
                                <p>
                                    Qualifcation : <?php echo $doctor['education']; ?><br>
                                    Specialization: <?php echo $doctor['spec']; ?><br>
                                    Adress: <?php  echo $doctor['address']; ?>
                                </p>
                            </div>
                          </div>
                          </div>
                          </div>
                          </tr>
                          </table>
                          <?php
                         }

      }
}
else{
    header('Location: login.php ');
}
?>
    </body>
  </html>


<?php
if(isset($_POST['deld']) or isset($_POST['delp'])){
  $id=null;
  if(isset($_POST['deld'])){
    $id = $_POST['did'];
  }
  else if(isset($_POST['delp'])){
    $id = $_POST['dip'];
  }
  $sql = "delete from login where id = '$id' ";
  mysql_query($sql) or die("Table Not Found".mysql_error());
   header('Location: home.php ');
 }
?>