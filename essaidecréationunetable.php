<?PHP
require_once "phpmysqlconnect.php";
        $sql ="
            CREATE TABLE IF NOT EXISTS identite 
			(carte_id int(11) PRIMARY KEY,nom varchar(30), prenom varchar(30),adresse varchar(30), date_niaissance varchar(30),email  varchar(30)
			);       
			       
     ";
$q=$conn->exec($sql);
echo "table créer";