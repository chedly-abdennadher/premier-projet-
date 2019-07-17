<?PHP
require_once "phpmysqlconnect.php";
        $sql ="call inserer_table(20,'skills')";
$q=$conn->exec($sql);
