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
<?php
session_start();
if($_SESSION["account_type"]==0){//admin
?>
<?php
}else if($_SESSION["account_type"]==1){//doctor
?>
         <nav>
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">Doctor Mash</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                   <li><a href="del.php">Delete Account </a></li>
                    <li><a href="logout.php" class="btn waves-effect waves-brown waves-ripple">Logout </a></li>
              </ul>
            </div>
          </nav>
        <br>
        <div class="center-align">
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
	}
                if(isset($_POST['update'])){
                    echo '<br>';
                    echo '<hr>';
                    $sql = "select * from doctors where id = '$id' ";
                    $result = mysql_query($sql) or die("Table Not Found".mysql_error());
                   while ($row=mysql_fetch_array($result)) {
		echo "<form method=post action=update.php>";
                ?>
            <div align="center" id="update-contain">
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
                 <?php
                                              echo '  <input type="submit" value="Update" id="submit" name="submit" class="btn waves-effect waves-brown waves-ripple ">';
		echo "</form>";
                echo '<br>';
                echo '<br>';
	}
                }
            ?>
      </div>
<?php
}
else if($_SESSION["account_type"] == 2) {//patient
    
}
else{
    header('Location: login.php ');
}
?>
    </body>
  </html>
