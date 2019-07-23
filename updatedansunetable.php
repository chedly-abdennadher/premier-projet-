<?PHP
require_once "phpmysqlconnect.php";
        $sql ="update customers set firstname='ali' where customerid=10101";
$q=$conn->exec($sql);