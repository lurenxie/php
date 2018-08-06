<?php
/**
 * Created by PhpStorm.
 * User: lurenxie
 * Date: 8/5
 * Time: 18:23
 */
header("Content-type: text/html; charset=utf-8");

$con = mysqli_connect("localhost:3306","root","root");
if (!$con)
{
    die('could not connect:' . mysqli_error($con));
    echo "<br />";
}
else
{
    echo "connect sucessful";
    echo "<br />";
}
    //create database
// if (mysqli_query($con,"create database my_db"))
// {
//    echo "database created";
//    echo "<br />";
// }
// else
// {
//    echo "'error creating database:' . mysqli_error($con)";
//    echo "<br />";
// }


    //create table
//mysqli_select_db($con, "my_db");
//$sql = "CREATE TABLE Persons
//    (
//        FirstName varchar(15),
//        LastName varchar(15),
//        Age int
//    )";
//mysqli_query($con,$sql);

    //insert into database
//mysqli_select_db($con ,"my_db");
//$sql="INSERT INTO Persons (FirstName, LastName, Age)
//VALUES
//('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
//
//if (!mysqli_query($con, $sql))
//{
//    die('Error: ' . mysqli_error($con));
//    echo "<br />";
//}
//echo "1 record added";
//echo "<br />";



    //create select
     mysqli_select_db($con, "my_db");
     $result = mysqli_query($con, "SELECT * FROM Persons");

     echo "<table border = '1'>
     <tr>
        <th>FirstName</th>
        <th>LastName</th>
     </tr>";

     while($row = mysqli_fetch_array($result))
     {
         echo "<tr>";
         echo "<td>" . $row['FirstName'] . "</td>";
         echo "<td>" . $row['LastName'] . "</td>";
         echo "</tr>";
     }




mysqli_close($con);
?>
