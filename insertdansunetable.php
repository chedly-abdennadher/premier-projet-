<?php
require 'phpmysqlconnect.php';
$sql ="insert into customers values(0,'chedly','abdennadher','ben arous','tunisie')";
$q=$conn->exec($sql);
?> 
