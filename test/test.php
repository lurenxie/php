<?php
/**
 * Created by PhpStorm.
 * User: lurenxie
 * Date: 8/5
 * Time: 18:23
 */

$con = mysqli_connect("localhost:3306","root","root");
if (!$con)
{
    die('could not connect:' . mysqli_error($con));
}
else
{
    echo "connect sucessful";
}
    //create database
// if (mysqli_query($con,"create database my_db"))
// {
//    echo "database created";
// }
// else
// {
//    echo "'error creating database:' . mysqli_error($con)";
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
//}
//echo "1 record added";



    //create select
    // mysqli_select_db("$con", "mydb");
    // $sql = "insert into "




mysqli_close($con);
?>
