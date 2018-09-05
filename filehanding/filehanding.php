<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\8\9 0009
 * Time: 10:32
 */

//标明文字格式
header("Content-type: text/html; charset=utf-8");
$filename = $_POST['name'];
$fileemail = $_POST['email'];
$myfile = fopen("filehanding.txt", "a") or die("can`t open the file");
fwrite($myfile, $filename);
fwrite($myfile, $fileemail);
fwrite($myfile, "\r\n");
fclose($myfile);
//输出文件中内容
//$myfile= fopen("filehanding.txt", "r");
//echo fread($myfile, filesize("filehanding.txt"));
//fclose($myfile);
$myfile= fopen("filehanding.txt", "r");
$echofile = arry();












?>




