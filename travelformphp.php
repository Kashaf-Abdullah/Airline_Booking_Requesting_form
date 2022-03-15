<?php

$insert=false;
if(isset($_POST['save_select'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connect is failed due to ".mysqli_connect_error());

}
//echo "success connecting to db";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
  $country_name=$_POST['country_name'];
 $country_nameto=$_POST['country_nameto'];
$email=$_POST['email'];
$purpose=$_POST['purpose'];

$sql="INSERT INTO `travelformdb`.`travelformdb` ( `name`, `age`, `gender`, `country_name`,`country_nameto`,`email`, `purpose`,`time`) VALUES ( '$name', '$age', '$gender','$country_name','$country_nameto' ,'$email', '$purpose', current_timestamp());";

//echo $sql;

if($con->query($sql) == true){
  //  echo"successfully inserted";
    $insert=true;
}
else{
//echo"not added";
 // echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="travelformstyle.css">
</head>
<body>
    <img class="bg"src="travelbackground2.jpg">
    <div class="maincontainer">
    
        <h1>TRAVEL REGISTRATION FORM</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
       
        
<form action="travelformphp.php" method="post">
    <input type="text" name="name" id="name"placeholder="name">
    <br>
    <input type="text" name="age" id="age"placeholder="age">
  <br>
<label>GENDER</label><input type="radio" name="gender" value="MALE">MALE<input type="radio" name="gender" value="FEMALE">FEMALE <input type="radio" name="gender" value="OTHER">OTHER
  <br>
  <select value="country_name"name="country_name">
      <option value="none">FROM</option>
      <option value="Lahore">Lahore</option>
      <option value="Islamabasd">Islamabad</option>
      <option value="Hyderbad">Hyderbad</option>
      <option value="Skardu">Skardu</option>
      <option value="Karachi">Karachi</option>
      
      </select>
      <select value="country_nameto"name="country_nameto">
        <option value="none">TO</option>
        <option value="Lahore">Lahore</option>
        <option value="Islamabasd">Islamabad</option>
        <option value="Hyderbad">Hyderbad</option>
        <option value="Skardu">Skardu</option>
        <option value="Karachi">Karachi</option>
        
        </select>
      <br>
    <input type="email" name="email" id="email"placeholder="enter your email">
    <br>

    <textarea name="purpose" id="purpose" cols="30" rows="10" placeholder="TRAVEL PURPOSE"></textarea>
<button type="submit" class="btn"name="save_select">SUBMIT</button>

</form>
    </div>
</body>
</html>
