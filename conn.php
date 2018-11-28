<?php

	$engi = "mysql";
	$host = "localhost";
	$dbse = "blog_06";
	$user = "root";
	$pass = "";

	$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host, $user, $pass);

?> 