<html>
    <center>
    <head>
        BOOK EVENT HALL</head></center>
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



                                       
echo"<form action=BookEventHall.php method=post>";
echo"<label1> TENANT ID&nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=id type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> FLAT NO &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=flatno type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> FLAT TYPE&nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=flattype type=Text />";
echo"</br>";
echo"</br>";
echo"<label1> BLOCK NAME&nbsp &nbsp &nbsp </label>";
echo"<input name=blockname type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> DATE&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input type=date name=date />";
echo"</br>";
echo"</br>";
echo"<label1> TIME&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=time type=Text/>";
echo"</br>";
echo"</br>";
echo"<label1> PURPOSE&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>";
echo"<input name=purpose type=Text/>";
echo"</br>";
echo"</br>";
echo"<input name=submit type= submit value=SUBMIT />";
echo"<input name=logout type= submit value=BACK />";
echo"</form>";



                                        $servername="localhost";
                                        $username="root";
                                        $password="";
                                        $dbname="appartment";
                                        $conn= mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $flat_no=$_POST['flatno'];
    $flattype=$_POST['flattype'];
    $block=$_POST['blockname'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $purpose=$_POST['purpose'];
    
    
    $sqlinsert="insert into book_event_hall values('$id','$flat_no','$flattype','$block','$date','$time','$purpose');";
    $result=mysqli_query($conn,$sqlinsert);
    //$row=mysqli_fetch_row($result);
   // if($row>0)
   // {
   //     header("Location:http://home.html");
   // }
    
    
    
};
if(isset($_POST['logout']))
{
  header("Location://localhost/apart/home.html");  
};


?>
</html>