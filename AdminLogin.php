<html>
<center>
    <head>TENANT LOGIN</head>
    </center>
</br>
<body background="C:\Users\Achupolice\Desktop\APP IMAGES/urban-1031304_640.jpg">
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
  <Center>
     <?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($conn,'appartment');
echo"<form action=StaffLogin.php method=post>";
  echo"<Center>";
echo"<label1>TENENT ID</label>";
echo"<input name=staffid type=Text requried/>";
    echo"</br>";
echo"<label1>PASSWORD</label1>";
    echo"<input name=password type=Password requried/>";
echo"</br>";
echo"<input type=submit name=login value=SUBMIT/>";
echo"</Center>";
echo"</form>";

if(isset($_POST['login']))
{
    $username=$_POST['staffid'];
    $pass=$_POST['pasword'];
    
    $sql="select PASSWORD from tenant_login where TENANT_ID='$username'';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row2=mysqli_fetch_assoc($result))
        {
            $Passuser=$row2['PASSWORD'];
        if(strcmp($pass,$row));
            {
                header("Locatiom:http://localhost/tent.html");
            }
           }
    }
    
}

?>
</Center>
</body>
</html>
