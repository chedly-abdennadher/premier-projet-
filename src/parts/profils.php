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
<link rel ="stylesheet" href="../../web/css/pagination.css">



</head> 
<body> 
<?php 
include "phpmysqlconnect.php";

$currentPage = 1;
//  get current page from url (get)
if(isset($_GET) && isset($_GET["page"]) )
{	$currentPage = $_GET["page"];
}

$orderBy = "";
$orderMode = "";
$extraParams="";
$iconMap = [];
$offset=0;
//  get ["order-by from url (get)
if(isset($_GET) && isset($_GET["order_by"]) ){
	$orderBy = $_GET["order_by"];
	$extraParams.="&order_by={$orderBy}";
}

//  get order-mode from url (get)
if(isset($_GET) && isset($_GET["order_mode"]) ){
	$orderMode = $_GET["order_mode"];
	$extraParams.="&order_mode={$orderMode}";
}


function getUrlWithParams($orderName){
$sens =  "ASC";
global $orderBy;
global $currentPage;
global $orderMode;
global $iconMap;
global $offset;
$iconMap[$orderName]="";
if($orderBy == $orderName){
	$iconMap[$orderName]="^";
	if($sens == $orderMode){
		$sens = "DESC";
		$iconMap[$orderName]="v";
	}
}

$offset=16*($currentPage-1);

return 	"?page ={$currentPage}&offset =$offset &order_by={$orderName}&order_mode={$sens}";
}
?>

<form method="get" action ="http://localhost/php/src/parts/profils.php">
 <div class="pagination">
<?php 
$sql="select count(*) from identite ";
echo $sql;
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$compte=$q->fetch();
$nbligne = $compte["count(*)"];	
$nbligneexacte=ceil ($nbligne);
echo $nbligneexacte;
?>
  <a class="<?php echo ($currentPage == 1 ? 'active' : ''); ?>" 
	<a href="?page=1<?php echo $extraParams; ?>"> page 1</a>
  <a class="<?php echo ($currentPage == 2 ? 'active' : ''); ?>" href="?page=2<?php echo $extraParams; ?>" > page 2</a>
  <a class="<?php echo ($currentPage == 3 ? 'active' : ''); ?>" href ="?page=3<?php echo $extraParams; ?>"> page 3</a> 
 
  <a href="?page=3<?php echo $extraParams; ?>">&raquo </a>

</div>
<div class="container">
<?PHP 
function inverseButton ($nomChamp)
{$sens="ASC";
global $orderMode;
global $orderBy;
if ($orderBy==$nomChamp)
{if ($sens ==$orderMode)
{$sens =$orderMode;

if ($sens =="ASC")
{echo "<button name='->' > <- </button>";}
else 
{echo "<button name='<-' > <- </button>";}
}
}}

?>
<table class="table table-striped table-sm"> 
<thead> 

<tr>
<th> <a href="<?php echo getUrlWithParams('cin');?>"> carte_identifiant <?php echo $iconMap['cin']; ?> </a> 

</th> 
<th> <a href="<?php echo getUrlWithParams('nom');?>" > nom <?php echo $iconMap['nom']; ?></a></th> 
<th> <a href="<?php echo getUrlWithParams('prenom');?>"> Prenom <?php echo $iconMap['prenom']; ?></a></th>
<th> <a href="<?php echo getUrlWithParams('adresse');?>"> Adresse <?php echo $iconMap['adresse']; ?></a></th>
<th> <a href="<?php echo getUrlWithParams('email');?>"> email <?php echo $iconMap['email']; ?></a></th> 
<th> <a href="<?php echo getUrlWithParams('date'); ?>"> Date de naissance <?php echo $iconMap['date']; ?></a></th> 
<th> action </th>	
</tr>
</thead >
<tbody>
<?php 
var_dump ($_GET);
$sql="select * from identite limit 15 offset ". 15*(($_GET['page'])-1)."";
echo $sql;
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

while ($parcours=$q->fetch()) 
{?>
<tr > 
<td> <?php echo $parcours["id_carte"];?> </td>
<td> <?php echo $parcours["nom"];?> </td> 
<td> <?php echo $parcours["prenom"];?> </td>
<td> <?php echo $parcours["adresse"];?> </td>
<td> <?php echo $parcours["email"];?> </td> 
<td> <?php echo $parcours["date_naissance"];?></td> 
<?PHP?>
<td>
<a href="http://localhost/php/src/parts/editerformulaire.php"> <button type="button" class="btn btn-danger"> editer </button></a>

<a href="http://localhost/php/src/parts/supprimerformulaire.php?id=30"> <button type="button" class="btn btn-danger" class="supprimer" class="supprimer"> supprimer </button></a> </td>

</tr>
<?PHP }?> 

</tbody>

</table>

</form>

 
</div>
 <a href ="http://localhost/php/src/parts/ajouterformulaire.php"> <button type="button" class="btn btn-danger">ajouter </button></a>

</body>
</html>
