<?php
function startup()
{
	$hostname = 'localhost';	
	$username = 'Admin'; 
	$password = '123456';
	$dbName = 'test';
	setlocale(LC_ALL, 'ru_RU.CP1251');	
	mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
	mysql_query('SET NAMES  cp1251');
	mysql_select_db($dbName) or die('No data base');
	session_start();		
}
function send_dataInfo($Table_name,$name1, $name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9)
{
	$name1 = trim($name1);
	$name2 = trim($name2);
	$name3 = trim($name3);
	$name4 = trim($name4);
	$name5 = trim($name5);
	$name6 = trim($name6);
	$name7 = trim($name7);
	$name8 = trim($name8);
	$name9 = trim($name9);

	if ($name1 == "" || $name2 == "" || $name3=="" || $name4=="" || $name5=="" || $name6=="" || $name7=="" || $name8=="" || $name9=="")
		return;		
	 $sql = "INSERT INTO $Table_name(Para_name,Para_number,Sensei_name,Auditory,Week_of_start,Week_of_end,Week_type,Para_type,Day_of_week) 
 			VALUES ('$name1',$name9,'$name2','$name3','$name4','$name5','$name6','$name8','$name7')";
		   
	$result = mysql_query($sql);
									
	if (!$result)
		die(mysql_error());		   
}
