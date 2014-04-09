<?php

$con = $con = mysqli_connect("localhost","user","pass","db1");
$con2 = $con2 = mysqli_connect("localhost","user","pass","db2");
$con3 = $con3 = mysqli_connect("localhost","user","pass","db3");


if (mysqli_connect_errno())
{

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

function getPerm()
{
	return "hello";
}

function isLogged()
{
if (isset($_SESSION['logged']))
{
	if ($_SESSION['logged']==false)
	{
		return false;
	} else {
		if ($_SESSION['logged']==true)
		{
			return true;
		}
	}
}
else
{
	$_SESSION['logged']=false;
	return false;
}
}

?>
