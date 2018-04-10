<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 4/10/18
 * Time: 10:28 AM
 */

//here we move the file inside the upload folder

$filename = $_FILES["file"]["name"]; //name of the file
$tmp = $_FILES["file"]["tmp_name"]; //temp name of the file
move_uploaded_file($tmp,'uploads/'.$filename); //move to the foulder that is 'uploads'