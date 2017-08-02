<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.8.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.8.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<label1>Tenant id</label1>
    <input type="Text"/>
    </br>
<section class="engine"><a rel="nofollow" href="https://mobirise.com">Mobirise windows website builder
</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="Home.html">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="attraction.html">ATTRACTIONS</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="aboutus.html">DETAILS</a></li>  <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="contact_us.html">CONTACT US</a></li></ul></div>
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-default" href="aboutus.html">ABOUT AS</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-default" href="services.html">SERVICES</a></li></ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section></br></br></br></br></br></br></br></br></br></br>
<?php

                                        $servername="localhost";
                                        $username="root";
                                        $password="";
                                        $dbname="appartment";
                                        $conn= mysqli_connect($servername,$username,$password,$dbname);

                                
                                        $sql2="SELECT * FROM tenanatregister;";
                                        $result2= mysqli_query($conn,$sql2);

                                  
                    //echo"<"
                                        if(mysqli_num_rows($result2)>0){
                                            
                                            echo"<table border=1><tr><th>&nbsp;&nbsp;&nbsp;TENANT_ID&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbspNO_OF_PERSONS&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;BLOCK_NAME&nbsp;&nbsp;&nbsp;</th> <th>&nbsp;&nbsp;&nbsp;FLAT_TYPE&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;FLAT_NUMBER&nbsp;&nbsp;&nbsp;</th> <th>&nbsp;&nbsp;&nbsp;RENT_AMOUNT&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;PAYMENT_STATUS&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;PHONE&nbsp;&nbsp;&nbsp;</th></tr>";
                                            while($row2=mysqli_fetch_assoc($result2))
                                            {
echo "<tr><td>&nbsp;&nbsp; &nbsp;".$row2['TENANT_ID']."</td><td>&nbsp;&nbsp;&nbsp;".$row2['NO_OF_PERSONS']. "</td>      <td>&nbsp;&nbsp;&nbsp;".$row2['BLOCK_NAME']." </td><td>&nbsp;&nbsp;&nbsp;".$row2['FLAT_TYPE']."  </td><td>&nbsp;&nbsp;&nbsp;".$row2['FLAT_NO']. " </td><td>&nbsp;&nbsp;&nbsp;".$row2['RENT_AMOUNT']. "</td><td>&nbsp;&nbsp;&nbsp;".$row2['PAYMENT_STATUS']." </td><td>&nbsp;&nbsp;&nbsp;".$row2['PHONE']." </td><tr>";
                                            }
                                            echo"</table>";};
                                            



?>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
  
</body>
</html>