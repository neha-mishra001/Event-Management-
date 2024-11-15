<?php

$username =filter_input(INPUT_POST,'name');
$email =filter_input(INPUT_POST,'email');
$contact =filter_input(INPUT_POST,'contact');
$occasion =filter_input(INPUT_POST,'occasion');
$BG =filter_input(INPUT_POST,'BG');
$offer_price =filter_input(INPUT_POST,'office_price');
$message =filter_input(INPUT_POST,'message');
if(!empty($username))
{
if(!empty($email)){
if(!empty($contact)){
if(!empty($occasion)){
if(!empty($BG)){
if(!empty($offer_price)){
if(!empty($message)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="test1";

//create connection 
$conn=new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqil-connect_error()){
  die('Connect Error ('.mysqli_connect_errno().')'
   .mysqli_connect_error());
}  
else {
 $sql="INSERT INFO registration(name, email, tel, occasion, brideGroom, offerPrice, message) value ('$username', '$email', '$contact', '$occasion', '$BG', '$offer-price', '$message')";
if($conn->query($sql)){
echo"New record is inserted sucessfully";
}
else{
 echo"error:".$sql ."<br>". $conn->error;
}
$conn->close();

}


}
else{
echo"please input the value";
die();
}

}
else{
echo"please input the value";
die();
}

}
else{
echo"please input the value";
die();
}

}
else{
echo"please input the value";
die();
}

}
else{
echo"please input the value";
die();
}

}
else{
echo"please input the value";
die();
}

}


?>