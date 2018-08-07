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
    //create database  增！//////////////////////////////////////////////////////
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


    //create table  增！//////////////////////////////////////////////////////
//mysqli_select_db($con, "my_db");
//$sql = "CREATE TABLE Persons
//    (
//        FirstName varchar(15),
//        LastName varchar(15),
//        Age int
//    )";
//mysqli_query($con,$sql);

    //insert into database 增！//////////////////////////////////////////////////////
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



    //create select 转到该库//////////////////////////////////////////////////////////
//     mysqli_select_db($con, "my_db");
//     $result = mysqli_query($con, "SELECT * FROM Persons");
//
//     echo "<table border = '1'>
//     <tr>
//        <th>FirstName</th>
//        <th>LastName</th>
//     </tr>";
//
//     while($row = mysqli_fetch_array($result))
//     {
//         echo "<tr>";
//         echo "<td>" . $row['FirstName'] . "</td>";
//         echo "<td>" . $row['LastName'] . "</td>";
//         echo "</tr>";
//     }

    //where where where 查！///////////////////////////////////////////////////////
//    mysqli_select_db($con, "my_db");
//    $result = mysqli_query($con, "select * from Persons
//    where Age = '32'
//");
//    while($row = mysqli_fetch_array($result))
//    {
//        echo $row['FirstName']. " " .$row['LastName'];
//        echo "<br />";
//    }

    //排序order by/////////////////////////////////////////////////////////////
//    mysqli_select_db($con, "my_db");
//    $result = mysqli_query($con, "
//    select * from Persons order by age
//    ");
//    while($row = mysqli_fetch_array($result))
//    {
//        echo $row['FirstName']. " " .$row['LastName'];
//        echo "<br />";
//    }

    //一给我里giao！giao！改///////////////////////////////////////////////
//    mysqli_select_db($con, "my_db");
//
//    mysqli_query($con,"update persons set age = '18'
//    where firstname = '何潇' and lastname = '黄金螺放牧者'
//    ");
//
//    $result = mysqli_query($con, "
//    select * from Persons
//    ");
//    while($row = mysqli_fetch_array($result))
//    {
//        echo $row['FirstName']. " " .$row['LastName'];
//        echo "<br />";
//    }

    //删！/////////////////////////////////////////////////////////////////
//    mysqli_select_db($con, "my_db");
//
//    mysqli_query($con,"delete from Persons where firstname = '123'
//    ");
//
//    $result = mysqli_query($con, "
//    select * from Persons
//    ");
//    while($row = mysqli_fetch_array($result))
//    {
//        echo $row['FirstName']. " " .$row['LastName'];
//        echo "<br />";
//    }


mysqli_close($con);
?>
