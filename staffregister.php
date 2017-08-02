<html>
    <center>
    <head>
        NEW STAFF </head></center>
    </br>
<body background="C:\Users\Achupolice\Desktop\APP IMAGES\bedroom-690129_640.jpg">
</body>
<a href="home.html">HOME</a>|
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
echo"<center>";
echo"<form action=staffregister.php method=post>";
echo"<label1> STAFF ID</label>";
echo"<input name=staffid type=Text/>";
echo"</br>";
echo"</br>";
echo"</br>";
echo"</br>";
echo"<label1> BLOCK NAME </label>";
echo"<input name=blockname type=Text/>";
echo"</br>";
echo"</br>";

echo"<label1> ADDRESS </label>";
echo"<input name=address type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1>STAFF NAME  </label1>";
echo"<input name=nam type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1>PH NO</label>";
echo"<input name=pno type=Text/>";
echo"</br>";
echo"</br>";
echo"</br>";
echo"</br>";
echo"</br>";
echo"<input name=submit type=submit value=SUBMIT />";
echo"<input name=logout type=submit  value=GO BACK />";
echo"</form>";
echo"</center>";



if(isset($_POST['submit']))
{
    $id=$_POST['staffid'];
    $block=$_POST['blockname'];
    $name=$_POST['nam'];
    $adr=$_POST['address'];
    $pno=$_POST['pno'];
    
    $sql="insert into staffregister values('$id','$name','$block','$adr','$pno');";
    mysqli_query($conn,$sql);
    $rows=mysqli_affected_rows($conn);
     if($rows>0)
     {
               
        header("Location://localhost/apart/staffregister.php");
     }
    


};
if(isset($_POST['logout']))
{
    header("Location://localhost/apart/adminhome.html");
};
?>
</html>