<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OTS Computers | Contact Us</title>
    <link rel="stylesheet" href="css/style.css" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="img/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
  </head>
  <body>

    <!-- page wrapper-->
<div class="page_wrapper">
  <header id="header">
    <!-- opening header-->
    <div class="container">
      <!-- openning acontainer for the head content-->
      <h1 class="logo">
        <!-- openning a logo div-->
        <img src="img/logo.png" alt="LOGO" width="190" height="46"/>
      </h1>
      <!-- End of log and H1 -->
      <!--openning of the navigation-->
      <nav id="main_menu">
        <ul>
          <li><a href="index.php" title="Daniel">HOME</a></li>
          <li><a href="team.php">ABOUT US</a></li>
          <li><a href="consultation.php">CONSULTATION</a></li>
          <li><a href="workshop.php">WORKSHOP</a></li>
          <li><a href="services.php">RESOURCES</a></li>
          <li><a href="contactus.php">CONTACT US</a></li>
        </ul>
      </nav>
    </div>
    <!-- End of navigation-->
  </header>
  <div class="content-contactus">
    <div class="contents">
      <h2><strong>Contact Us</strong></h2>
      <p>

        Use this form to send us a message:
      </p>
      <!-- openning the form content-->
    <div class="content-contact">
      <div class="address">
        <p>

  <i class="fas fa-home "style="color:blue;opacity:.6"></i>
                 Office address:<br>
          OTS Computers <br>
        </p>
        <p>
          No 12, Bola Hammed Tinubu Road, Ijaye Ojokoro, Lagos, Nigeria.
        </p>
        <p>

          <i class="fas fa-globe " id="use" style="color:blue;opacity:.6"></i> Website: www.otscompters.com.ng
        </p>
        <p>
          <i class="fa fa-envelope " id="use" style="color:blue;opacity:.6" ></i> Email: custumerService@OTScomputers.org.ng .
        </p>
        <p>
          <i class="fa fa-phone " id="use" style="color:blue;opacity:.6" ></i> Phone line :+2348166531925
        </p>
      </div>
  <p>
<!-- Creating the form      -->
    <form class="form" action="" method="POST"><br>
      <div class="formrow">
      <label for="name">Name</label><br>  <i class="fas fa-user user" id="users(1)"></i>
      <input type="text" name="name" placeholder="Name" required="required" onclick="change(0)"  onmouseout="unchange(0)"  title="Name"><br>
      <label for="email">Email</label><br> <i class="fas fa-envelope user"></i>
      <input type="email" name="email" placeholder="Email" required="required"  onclick="change(1)" onmouseout="unchange(1)" title="Email"><br>
      <label for="phone">Phone</label><br> <i class="fas fa-phone user" id="user"></i>
      <input type="text" name="phone" placeholder="Subject" required="required"  onclick="change(2)" onmouseout="unchange(2)" title="Phone No"><br>
      <label for="message">Message</label><br> <i class="fas fa-comments user"></i>
      <textarea name="message" rows="5" cols="60" placeholder="Message"  onclick="change(3)" onmouseout="unchange(3)" required="required" title="Enter Your Message"></textarea><br>
    </div>
      <input type="submit" name="submit" value="Submit">
    </form>

    </div>
  </p>



</div>
</div>
<footer>
  <div class="footer-contact">
    <div class="copyc">
    &copy 2016   <strong>ODAI DANIEL PROJECT SERVICES</strong> . All Rights Reserved.
    </div>

  </div>
</footer>
</div>


<?php
if (isset($_POST['submit'])) {
  $id = "";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone= $_POST['phone'];
  $message =$_POST['message'];
  $time = date('m-d-Y')."  ".date('h:i:sa');
  $ip = $_SERVER['REMOTE_ADDR'];
  if ($name=="") {
    echo "<script type='text/javascript'>
    var i = document.forms[0][0];
    i.style.boxShadow='0px 0px 6px #030 ';
    </script>";
  }
  if ($email=="") {
    echo "<script type='text/javascript'>
    var i = document.forms[0][1];
    i.style.boxShadow='0px 0px 6px #030 ';
    </script>";
  }
  if ($phone =="") {
    echo "<script type='text/javascript'>
    var i = document.forms[0][2];
    i.style.boxShadow='0px 0px 6px #030 ';
    </script>";
  }
  if ($message =="") {
    echo "<script type='text/javascript'>
    var i = document.forms[0][3];
    i.style.boxShadow='0px 0px 6px #030 ';
    </script>";
  }

$con = mysqli_connect("localhost","root","","therapy_database");

$sql="INSERT INTO contact_us VALUES('$id','$name','$email','$phone','$message','$time','$ip')";
$sol = mysqli_query($con,$sql);
if (!$sol) {
echo "<P>ERROR</p>" + mysqli_error($con);
}else {
  echo"<script type='text/javascript'>
  alert('Thanks for message we reply as soon as possible')
  </script>";

}
}

 ?>
<script type="text/javascript">

/* FOrms */
function change(n) {
  var i = document.forms[0][n];
  i.style.boxShadow="0px 0px 6px #030 ";
}
function unchange(n) {
  var i = document.forms[0][n];
  i.style.boxShadow="0px 0px 0px white ";
}

</script>
</body>
  </html>
