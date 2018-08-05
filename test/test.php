<?php
/**
 * Created by PhpStorm.
 * User: lurenxie
 * Date: 8/5
 * Time: 18:23
 */

$con = mysqli_connect("localhost:3306","root","");
if (!$con)
{
    die('could not connect:' . mysqli_error($con));
}
else
{
    echo "connect sucessful";
}
    //create database
//if (mysqli_query($con,"create database mybd"))
//{
//    echo "database created";
//}
//else
//{
//    echo "'error creating database:' . mysqli_error($con)";
//}






mysqli_close($con);
?>








