<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connect is failed due to ".mysqli_connect_error());

}
echo "success connecting to db";



$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql="INSERT INTO `shopping`.`shopping`(`name`, `address`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$address', '$email', '$phone', '$desc', current_timestamp())";
echo $sql;

if($con->query($sql) == true){
    echo"successfully inserted";
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}


?>

<?php
session_start();
$con=mysqli_connect("localhost","root","");
if(isset($_POST['stud_delete_btn'])){
    $sno=$_POST['delete_stu_id'];
    $query="DELETE from `shopping`.`shopping` WHERE `sno`='$sno' ";
    echo $sql;
    $query_run=mysqli_query($con,$query);

    if($query_run){
        echo"successfully deleted 
        alert('data is deleted');
        ";
        $_SESSION['status']="Data deleted successfully";
    header("Location:formphp.php");
    }
    else{
        
        echo"not deleted";
        $_SESSION['status']="Data not deleted";
        header("Location:formphp.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <header>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </header>
    <div class="maincontainer">
   
        <h1>WELCOME TO ONLINE SHOPPING APP</h1>
        <p>Select your item</p>
        <?php
  if($insert==true){
 echo "<p>thankyou for shopping</p>";
 }
  ?>
        <div class="container">
<form action="formphp.php" method="post">
<input type="text" name="name" id="name"placeholder="enter your name">
<input type="text" name="address" id="address"placeholder="enter your address">
<input type="email" name="email" id="email"placeholder="enter your email">
<input type="phone" name="phone" id="phone"placeholder="enter your phone number">
<textarea name="desc" id="desc" cols="30" rows="10"placeholder="feedback"></textarea>
<label>Delete the data</label>
<input type="text"name="delete_stu_id">
<button class="btn">Order</button>
<button type="submit"name="stud_delete_btn">Delete data </button>
</form>
            <div class="item"><img class="picdress" src="dress1.png"></div>
            <div class="item"><img class="picdress" src="dress2.png"></div>
            

        </div>
    </div>
</body>
</html>