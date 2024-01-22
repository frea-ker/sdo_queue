<?php
	/*

	fdms = faculty deliverable monitoring system

	sample query

	=> INSERT INTO `loginform`(`user`, `pass`) VALUES ("second","second");
	=> SELECT `ID`, `user`, `pass` FROM `loginform` WHERE ID=1;
	=> UPDATE `loginform` SET `user`="asd",`pass`="asd" WHERE ID=1
	*/

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sdo_queue";
	$db_con = mysqli_connect($host,$user,$password);
	mysqli_select_db($db_con, $db);
?>