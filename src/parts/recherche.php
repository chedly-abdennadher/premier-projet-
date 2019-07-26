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

<div class="container">
<div class="row"> 
<div class="col-8"> 
<form id="form1" novalidate 
 method="post" action="http://localhost/php/src/parts/recherche.php">
</div>
<div class="col-3 border-left"> 
<img src="../../web/image/index.jpeg">
<div class="row"> 
<div class="col-12"> 
<label for ="carte_id" > carte identite </label>
<input type="text" name= "carte_id" pattern ="[0-9]{3}" value="<?php if (isset($_POST)&&(isset($_POST['carte_id']))){echo $_POST['carte_id'];}?>"><br>
<input type="submit" name="recherche_carteid" value="recherche carte_identite">

<label for="nom"> nom</label>

<input type="text" name="nom" id="nom" class="text" pattern ="[A-Z]{1}[a-z]*" 
value="<?php if (isset($_POST)&&(isset($_POST['nom']))){echo $_POST['nom'];}?>">
<input type="submit" name="recherche_nom" value="recherche nom">


	<div>
<label for ="prenom"> prenom</label> 
<input type ="text"id="prenom" pattern ="[A-Z]{1}[a-z]*" 
class="text" 
name="prenom"
value="<?php if (isset($_POST)&&(isset($_POST['prenom']))){echo $_POST['prenom'];}?>"><br>
<input type="submit" name="recherche_prenom" value="recherche prenom">

</div>
<h2> development </h2> <br>
<label for ="adress">adress  </label>
<input type="text" id ="adress" name="adresse"><br>
<input type="submit" name="recherche_adresse" value="recherche adresse">

<label for ="datenaissance"> date naissance </label>
<input type="date" id ="datenaissance" name="datenaissance" 
value="<?php if (isset($_POST)&&(isset($_POST['datenaissance']))){echo $_POST['datenaissance'];}?>"
>
<input type="submit" name="recherche_datenaissance" value="recherche date_naissance">
  
<label for ="adresseemail"> email </label>
<input type="email" id ="adresseemail" name="email" value="<?php if (isset($_POST)&&(isset($_POST['email']))){echo $_POST['email'];}?>"
> <br>
<input type="submit" name="recherche_email" value="recherche email">


</div>

</div>
</form>


</div>

<div class="col-1 image">
</div>
</div> 
</div>

<?php 
include "phpmysqlconnect.php";

function affiche($q)
{
?>
<table border>
<thead>
<tr>
<th>
carte_id
</th>
<th>
nom
</th>
<th>
prenom
</th>
</tr>
</thead>
<?PHP 
while ($r=$q->fetch())
{?>

<tbody>
<tr>
<td><?PHP  echo $r["id_carte"]; ?></td>
<td><?PHP echo $r["nom"]; ?></td>
<td><?PHP echo $r["prenom"];?></td>
</tr>
	
<?PHP }
?></tbody>
	</table>
<?PHP 
}
if (isset($_POST["recherche_carteid"]))
{
$sql='select id_carte,nom,prenom from identite where id_carte='.$_POST["carte_id"].';';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
affiche ($q);
}
if (isset($_POST["recherche_nom"]))
{$sql='select id_carte,nom,prenom from identite where nom like "'.$_POST["nom"].'" 	 ;';
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

affiche ($q);
}
if (isset($_POST["recherche_prenom"]))
{$sql='select id_carte,nom,prenom from identite where prenom like "'.$_POST["prenom"].'" 	 ;';
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

affiche ($q);

	
	
}
if (isset($_POST["recherche_adresse"]))
{$sql='select id_carte,nom,prenom from identite where adresse like "'.$_POST["adresse"].'";';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

affiche ($q);

}
if (isset($_POST["recherche_datenaissance"]))
{$sql='select id_carte,nom,prenom from identite where date_naissance like "'.$_POST["datenaissance"].'" 	 ;';
echo $sql;
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

affiche ($q);

	
}
if (isset($_POST["recherche_email"]))
{$sql='select id_carte,nom,prenom from identite where email like "'.$_POST["email"].'" 	 ;';
echo $sql;
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

affiche ($q);

}

?> 

</body>
</html>