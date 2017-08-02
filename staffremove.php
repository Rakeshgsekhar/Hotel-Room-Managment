<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.8.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.8.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-331x140-61.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="engine"><a rel="nofollow" href="https://mobirise.com">Mobirise html website maker
</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="Home.html">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="aboutus.html">ABOUT</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="contact_us.html">CONTACT</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="register.html">REGISTRATION</a></li> </ul></div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
    
    
    
   
    
    

<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-contacts mbr-after-navbar" id="content5-14" style="background-color: rgb(26, 188, 156);">
    
    

    
    
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-contacts" id="content5-15" style="background-color: rgb(26, 188, 156);">
   
     
    
    
    
    
</section>
    
    
     <?php
                                        
                                    
    
                                       // $company_id=$_SESSION['company_reg_id'];
                                        $servername="localhost";
                                        $username="root";
                                        $password="";
                                        $dbname="appartment";
                                        $conn= mysqli_connect($servername,$username,$password,$dbname);
    if(isset($_POST['update'])) {
    //echo"updat";
	$UpdateQuery = "UPDATE staffregister SET STAFF_ID='$_POST[id]', NAME='$_POST[username]', BLOCK_NAME='$_POST[name]', ADDRESS='$_POST[adr]', PHONE_NO='$_POST[pno]' WHERE STAFF_ID='$_POST[hidden]';";
	mysqli_query($conn,$UpdateQuery);
   // if($row=mysqli_fetch_array($result)>0)
    //{
   //     echo"sucess";
   // }//else
  //  {
  //      echo"something went wrong";
  //  }
}
$sql = "select * from staffregister; ";
$my_Data = mysqli_query($conn,$sql);
     
echo "<table border=1>";
	echo "<tr>";
		echo "<th>STAFF_ID</th>";
		echo "<th>NAME</th>";
		echo "<th>BLOCK_NAME</th>";
        echo "<th>ADDRESS</th>";
        echo "<th>PNONE_NO</th>";
       
	echo "</tr>";
while($record = mysqli_fetch_array($my_Data)) {
	echo "<form action=fullten.php method=post>";
	echo "<tr>";
		echo "<td>" . "<input type=text name=id value=" . $record['STAFF_ID'] . "> </td>";
		echo "<td>" . "<input type=text name=username value=" . $record['NAME'] . "> </td>";
		echo "<td>" . "<input type=text name=name value=" . $record['BLOCK_NAME'] . "> </td>";
        echo "<td>" . "<input type=text name=adr value=" . $record['ADDRESS'] . "> </td>";
        echo "<td>" . "<input type=text name=pno value=" . $record['PHONE_NO'] . "> </td>";
		echo "<input type=hidden name=hidden value=" . $record['STAFF_ID'] . ">";
        //echo "<input type=hidden name=hiddenit value=" . $record['ITEM'] . ">";
		echo "<td>" . "<input type=submit name=update value=UPDATE > </td>";
        echo "<td>" . "<input type=submit name=remove value=REMOVE > </td>";
	echo "</tr>";
	echo "</form>";
}
echo "</table>";
    
   


if(isset($_POST['remove']))
{
     $id_doc=$_POST['id'];
    echo $id_doc;
    $removesql="DELETE from tenanatregister where TENANT_ID='$_POST[hidden]';";
    mysqli_query($conn,$removesql);
            $rows=mysqli_affected_rows($conn);
           // echo $rows;
            if($rows>0)
            {
               header("Location:http://localhost/apart/fullten.php");
            }
};
    
    
    mysqli_close($conn);
     
?>    
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-2" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2015 GLOBAL CONVERTER SOLUTION. <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
  
</body>
</html>