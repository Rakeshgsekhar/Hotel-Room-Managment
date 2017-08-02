<html>
    <center>
    <head>
        NEW TENANT </head></center>
    </br>
<body background="C:\Users\Achupolice\Desktop\APP IMAGES\bedroom-690129_640.jpg">
</body>
<a href="Home.html">HOME</a>|
     <a href="aboutus.html">DETAILS</a>|
     <a href="contact_us.html">CONTACT US</a>|
    <a href="attraction.html">ATTRACTIONS</a>|
        <a href="services.html">SERVICES</a>| 
    <a href="aboutus.html">ABOUT US</a>|
    </br>
 </br>
 </br>  
 </br> 
  </br>
 </br>
    </br>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="appartment";
$conn= mysqli_connect($servername,$username,$password,$dbname);



echo"<form action=tenentRegister.php method=post>";
echo"<label1> TENANT ID&nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=tenantid type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> NO PERSON</br> 
    IN FAMILY&nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=no_of_person type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> BLOCK NAME&nbsp &nbsp &nbsp </label>";
echo"<input name=block_name type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> FLAT TYPE&nbsp &nbsp &nbsp &nbsp </label>";
echo"<input name=flate_type type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1>FLAT NUMBER</label>";
echo"<input name=flat_no type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> RENT AMOUNT&nbsp </label>";
echo"<input name=rent_amt type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> PAYMENT STATUS&nbsp </label>";

echo"<input type=radio
       name=pay value=FULL>payed fully";
echo"<input type=radio
       name=pay value=PARTIAL>payed partially";
echo"</br>";
echo"</br>";
echo"<label1> PHONE&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=phno type=Text/>";
echo"</br>";
echo"</br>";
echo"<input name=submit type= submit value=SUBMIT/>";
echo"<input name=back type=submit value=BACK/>";
echo"</form>";

if(isset($_POST['submit']))
{
   
    $tenantid=$_POST['tenantid'];
    $nop=$_POST['no_of_person'];
    $blockname=$_POST['block_name'];
    $flattype=$_POST['flat_type'];
    $flatno=$_POST['flat_no'];
    $rentamt=$_POST['rent_amt'];
    $phno=$_POST['phno'];
    $pay=$_POST['pay'];
    $sql="insert into tenanatregister values('$tenantid','$nop','$blockname','$flattype','$flatno','$rentamt','$pay','$phno');";
    mysqli_query($conn,$sql);
    $rows=mysqli_affected_rows($conn);
     if($rows>0)
     {
               
        header("Location://localhost/apart/tenentRegister.php");
     }
};
if(isset($_POST['logout']))
{
    header("Location://localhost/apart/adminhome.html");
};






?>

</html>