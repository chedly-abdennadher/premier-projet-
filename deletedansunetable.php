<?PHP
require_once "phpmysqlconnect.php";
        $sql ="delete from tasks2";
$q=$conn->exec($sql);