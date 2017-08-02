<html>
    <center>
    <head>
        BOOK CABE</head></center>
    </br>
<body background="C:\Users\Achupolice\Desktop\APP IMAGES/living-1032733_960_720.jpg">
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
echo"<center>";
echo"<form action=BookCab.php method=post>";
echo"<label1> TENANT ID &nbsp; >";
echo"<input name=tentid type= &nbspText/>";
echo"</br>";
echo"</br>";
echo"<label1> FLAT NO&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=flatno type= &nbspText/>";
echo"</br>";
echo"</br>";
echo"<label1> FLAT TYPE&nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=flattype type= &nbspText/>";
echo"</br>";
echo"</br>";
echo"<label1> BLOCK NAME&nbsp &nbsp &nbsp </label>";
echo"<input name=blockname type= &nbspText/>";
echo"</br>";
echo"</br>";
echo"<label1> DATE&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input type=date name=date>";
echo"</br>";
echo"</br>";
echo"<label1> TIME&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=time type= &nbspText/>";
echo"</br>";
echo"</br>";
echo"<label1> PURPOSE&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=purpose type=&nbspText/>";
echo"</br>";
echo"</br>";
echo"<label1> VEHICLE TYPE&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=cartype type= &nbspText/>";
echo"</br>";
echo"</br>";
echo"<input name=submit type=submit value=SUBMIT />";
echo"&nbsp;&nbsp;";
echo"<input name=logout type=submit value=LOGOUT />";
echo"</form>";
echo"</center>";



                                        $servername="localhost";
                                        $username="root";
                                        $password="";
                                        $dbname="appartment";
                                        $conn= mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    $tentid=$_POST['tentid'];
    $flat_no=$_POST['flatno'];
    $flattype=$_POST['flattype'];
    $block=$_POST['blockname'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $purpose=$_POST['purpose'];
    $cartype=$_POST['cartype'];
     $sqlinsert="insert into book_cabe values('$tentid','$flat_no','$flattype','$date','$time','$purpose','$cartype');"; 
    $result=mysqli_query($conn,$sqlinsert);
  //  $row=mysqli_fetch_row($result);
       // if($row>0)
       // {
            
      ////      header("Location:http//home.html");
     //   }
    //else
   // {
  //      echo "cannot book pleez try aging later";
  //  }
    
    
    
    
};
if(isset($_POST['logout']))
{
    header("Location://localhost/apart/home.html");
};










?>
</html>