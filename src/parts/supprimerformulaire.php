<!doctype html> 
<html> 
<head> 
<meta charset ="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel ="stylesheet" href="../../web/css/cv2.css">
<link rel ="stylesheet" href="../../web/css/erreur.css">

</head> 
<body> 
<?php 
if (isset ($_GET["id"]))
{
echo "hello";
$contenuformulaire["carte_id"]=$_GET["id"];


require 'phpmysqlconnect.php';
if ($contenuformulaire["carte_id"]!=NULL)
{$sql ='select * from identite where id_carte='. $contenuformulaire["carte_id"].'';
echo $sql; 
$id_carte_bd=$conn->query($sql);
$id_carte_bd->setFetchMode(PDO::FETCH_ASSOC);

$trouve =0;


while (($parcours= $id_carte_bd->fetch())&&($trouve ==0))
{
if (isset ($parcours["id_carte"])) 
{$trouve=1;}
}
if ($trouve==0)
{echo "profile introuvable";}
else 
{if ($contenuformulaire["confirmer"]=="ok")
{echo "supp";
$sql ='delete from identite where id_carte='.$contenuformulaire["carte_id"].';';
echo $sql; 

$q=$conn->exec($sql);
echo "donnée supprime";
	
}
}
}}
?>


	
 

</body> 
</html> 