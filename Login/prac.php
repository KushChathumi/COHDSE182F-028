<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
if(isset($_POST["txtUser"]))
{
	$user=$_POST["txtUser"];
	$pw=$_POST["txtPw"];
	
	$flag=0;
	
	if ($user==$_POST["txtUser"] && $pw==$_POST["txtPw"])
	($flag=1);
	
	if($flag==1)
	{
	  session_start();
	  $_SESSION["user"] =$user;
	  $_SESSION["accesstime"]=time(10);
	  header("location:welcom.php");	
	}
	else
	{
		echo"Invalid user name or password";	
	}
}

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<title>LOGIN</title>
	<body>
    <FORM name="frm_login" method="post" action=""/>
    User Name </br>
    <input type="text" name="txtUser" /></br></br>
    Password </br>
     <input type="text" name="txtPw"/></body></br></br>
    <input type="submit" name="btnlog" value="Login"/>
    </body>
</html>