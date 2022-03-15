<?php 


$query="SELECT * FROM `travelformdb`";
$search_result=filterTable($query);

function filterTable($query){
    $connect=mysqli_connect("localhost","root","","travelformdb");
    $filter_result=mysqli_query($connect,$query);
    return $filter_result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:crimson;


        }
         table,tr,td,th{
            border: 1px solid white;
            font-size: 33px;
            background-color:black;
            color:aliceblue;

        }
        table{
            width: 100%;
            height: 100%;
        }
        th{
            height: 70px;
        }
        td{
            height:86px;
        }
        h1{
            color:white;
            font-size:66px;
        }
    </style>
</head>
<body>
    <h1>TRAVEL FORM DATA</h1>
    <table width= border="6">
        <tr>
        <th> SNO </th>
        <th>NAME</th>
            <th>AGE   </th>
            <th> GENDER  </th>
            <th> FROM  </th>
            <th> TO  </th>
            <th> EMAIL  </th>
            <th> REASON FOR TRAVELING </th>
            <th> Time</th>
            
            
        </tr>
        <?php  while($row=mysqli_fetch_array($search_result)) :?>


        <tr>
        <td><?php  echo $row['sno']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['age']; ?></td>
            <td><?php  echo $row['gender']; ?></td>
            <td><?php  echo $row['country_name']; ?></td>
            <td><?php  echo $row['country_name']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['purpose']; ?></td>
            <td><?php  echo $row['time']; ?></td>
            
            <td></td>
        
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>