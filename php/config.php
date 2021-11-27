<?php

$con=new mysqli("localhost","root","geeth123","wps");

if($con->connect_error)
{
	die("connection failed: " .$con->connect_error);
}


?>