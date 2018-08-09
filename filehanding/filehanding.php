<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\8\9 0009
 * Time: 10:32
 */

//标明文字格式
header("Content-type: text/html; charset=utf-8");

$myfile = fopen("filehanding.txt","a")or die("can`t open the file");
fwrite($myfile, "朕裆下很郁闷啊！");
fclose($myfile);
$myfile1= fopen("filehanding.txt", "r");
echo fread($myfile1, filesize("filehanding.txt"));
fclose($myfile1);

?>