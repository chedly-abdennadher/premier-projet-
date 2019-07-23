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
$_GET["page"]=$currentPage;

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
global $orderMode;
global $currentPage;
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


return 	"?page ={$currentPage}&order_by={$orderName}&order_mode={$sens}";
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
$nbligne = ceil($compte["count(*)"]);	

$limit=15;
$nbpage = ceil($nbligne/$limit);

echo $nbpage;

?>
<?php 

for ($i=1;$i<=$nbpage;$i++)
{?>
 <a class="<?php echo ($currentPage == $i ? 'active' : ''); ?>" 
	<a href="?page=<?php echo $i;?> <?php echo $extraParams; ?>"> page <?php echo $i;?></a>
<?php }?>

</div>
<div class="container">

<table class="table table-striped table-sm"> 
<thead> 

<tr>
<th> <a href="<?php echo getUrlWithParams('id_carte');?>"> carte_identifiant <?php echo $iconMap['id_carte']; ?> </a> 

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
global $orderBy;
global $orderMode;

if ((isset ($_GET["page"]))&&($orderBy!="")&&($orderMode!=""))
{
$limitact=$limit*(intval($_GET['page'])-1);
$sql="select * from identite order by ". $orderBy. " " .
$orderMode.
" limit " .$limit ." offset ". $limitact."";} 
else 
{$sql="select * from identite order by id_carte ASC limit " .$limit ." offset 0";
	
}
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
<?PHP }
?> 

</tbody>

</table>

</form>

 
</div>
 <a href ="http://localhost/php/src/parts/ajouterformulaire.php"> <button type="button" class="btn btn-danger">ajouter </button></a>

</body>
</html>
