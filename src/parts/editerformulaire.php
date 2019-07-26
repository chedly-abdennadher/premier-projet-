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
<?php require 'phpmysqlconnect.php'; ?>
<div class="container">
<div class="row"> 
<div class="col-8"> 
<form onsubmit="return validate_form()" novalidate id="form1"
 method="post" 
 action="http://cv.dream-tek.local/src/parts/editerformulaire.php?id=<?php echo $_GET['id']; ?> " >
 <?php
include "./2emetest.php";
?>
<h2><div class="e"> experience </div></h2>
<?php 
$sql='select count(*) from experience where id_carte ='.$_GET["id"].';';
$q= $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$parcours=$q->fetch();
$nbexperience= intval($parcours["count(*)"]);
echo $nbexperience;
?> 
 
<h2><div class="acc"> accomplishement </div> </h2>
<label for ="accomplishement1"> nom accomplishement 1</label>
<input type="text" id ="nomaccomplishement1" class="text" name="nomaccomplishement1"> <br>
<label for ="dateaccomplishement1"> date accomplishement 1 </label> 
<input type="text" id="dateaccomplishement1" name="dateaccomplishement1">  
<h2><div class="e"> education </div></h2>
<h2> diploma </h2>
 
<label for ="dateaccomplishement2"> date diploma 1</label> 
<input type ="text" id ="dateaccomplishement2" name="dateaccomplishement2"> 
<hr>
<label for ="nomaccomplishement2"> nom diploma 1</label> 
<input type ="text" id ="nomaccomplishement2" name="nomaccomplishement2"> 

<label for ="schoolname">school name </label> 
<input type="text" id="schoolname" name="schoolname"> </label>

<hr>
<label for ="dbc"> type bac </label> 
<select name="type_bac">
<option value="math"> math</option>
<option value="science"> science</option>
<option value="eco"> éco</option>
<option value="lettre"> lettre</option>

</select>
<br>
<label for ="datebac"> date bac </label> 
<input type ="date" id="datebac" name="date_bac"
value="<?php if (isset($_POST)&&(isset($_POST['date_bac']))){echo $_POST['date_bac'];}?>">

<hr>
 
<h2><div class="e"> reference</div></h2>
</div>
<div class="col-3 border-left"> 
<img src="../../web/image/index.jpeg">
<div class="row"> 
<div class="col-12"> 

<label for="nom"> nom</label>

<input type="text" name="nom" id="nom" class="text <?php if (!validateInput('nom')) echo 'error_input'; ?>" pattern ="[A-Z]{1}[a-z]*" 
value="<?php if (isset($_POST)&&(isset($_POST['nom']))){echo $_POST['nom'];}?>">


	<div>
<label for ="prenom"> prenom</label> 
<input type ="text"id="prenom" pattern ="[A-Z]{1}[a-z]*" 
class="text <?php if ((isset($_POST['prenom']))&&(isset($_POST))&&(!validateInput('prenom'))){echo'error_input';}?>" 
name="prenom"
value="<?php if (isset($_POST)&&(isset($_POST['prenom']))){echo $_POST['prenom'];}?>"><br>
</div>
<h2> development </h2> <br>
<label for ="adress">adress  </label>
<input type="text" id ="adress" name="adresse"><br>
<label for ="datenaissance"> date naissance </label>
<input type="date" id ="datenaissance" name="datenaissance" 
value="<?php if (isset($_POST)&&(isset($_POST['datenaissance']))){echo $_POST['datenaissance'];}?>"
class="<?php if ((isset($_POST['datenaissance']))&&(isset($_POST))&&(!validateDate('datenaissance','2005-12-12','1990-01-01'))){echo'error_input';}?>">  
<label for ="adresseemail"> email </label>
<input type="email" id ="adresseemail" name="email" value="<?php if (isset($_POST)&&(isset($_POST['email']))){echo $_POST['email'];}?>"
class="<?php if ((isset($_POST['email']))&&(isset($_POST))&&(!validateEmail('email'))){echo'error_input';}?> "> <br>

<h2> <div class="nom">summary </div> </h2> <br>
<h2><div> skills </div> </h2> 
<div class="col-12"> 
<?php 
$sql='select count(*) from competence where (id_carte ='.$_GET["id"].') and (type_competence="skills");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$selectionner=$q->fetch();
$nbskills=intval($selectionner["count(*)"]);

 $sql ='select nom_competence,type_competence,id from competence where (id_carte ='.$_GET["id"].')
and (type_competence="skills");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$parcours =$q->fetch();


for($i=0; $i<$nbskills; $i++)
{?>
<input type ="text"  name="skills[]" 
value="<?php echo $parcours['nom_competence'];?>">  
<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<div class="invisible"><input type="text" name="t	ype_competence" value="<?php echo $parcours["type_competence"];?>" ></div>

<?php 
$parcours =$q->fetch();

}?>
	

<h2><div>logiciel</div> </h2>

<?php 
$sql='select count(*) from competence where (id_carte ='.$_GET["id"].') and (type_competence="logiciel");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$selectionner=$q->fetch();
$nbskills=intval($selectionner["count(*)"]);

$sql ='select nom_competence,id from competence where (id_carte ='.$_GET["id"].')
and (type_competence="logiciel");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$parcours =$q->fetch();

for($i=0; $i<$nbskills; $i++)
{?>
<input type ="text"  name="logiciel[]" 
value="<?php echo $parcours['nom_competence'];?>">  
<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<?php  
$parcours =$q->fetch();

}?>

<h2><div> SGBD </div></h2>
<?php 
$sql='select count(*) from competence where (id_carte ='.$_GET["id"].') and (type_competence="SGBD");';
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$selectionner=$q->fetch();
$nbskills=intval($selectionner["count(*)"]);

 $sql ='select nom_competence,id from competence where (id_carte ='.$_GET["id"].')
and (type_competence="SGBD");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$parcours =$q->fetch();

for($i=0; $i<$nbskills; $i++)
{?>
<input type ="text"  name="SGBD[]" 
value="<?php echo $parcours['nom_competence'];?>">  
<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<?php  
$parcours =$q->fetch();

}?>

<h2><div> langue </div></h2>

<?php 
$sql='select count(*) from competence where (id_carte ='.$_GET["id"].') and (type_competence="langue");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$selectionner=$q->fetch();
$nbskills=intval($selectionner["count(*)"]);
$sql ='select nom_competence,id from competence where (id_carte ='.$_GET["id"].')
and (type_competence="langue");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$parcours =$q->fetch();

for($i=0; $i<$nbskills; $i++)
{?>

<input type ="text"  name="langue[]" 
value="<?php echo $parcours['nom_competence'];?>">  

<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<?php  
var_dump($parcours);

$parcours =$q->fetch();

}?>

<label for ="projet"> projet 
<input type ="text" id="projet" name="projet"> <br>
<?php 
$sql='select count(*) from competence where (id_carte ='.$_GET["id"].') and (type_competence="projet");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$selectionner=$q->fetch();
$nbskills=intval($selectionner["count(*)"]);
$sql ='select nom_competence,type_competence,id from competence where (id_carte ='.$_GET["id"].')
and (type_competence="projet");';

$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$parcours =$q->fetch();
var_dump ($parcours); 
for($i=0; $i<$nbskills; $i++)
{?>
<input type ="text"  name="projet" 
value="<?php echo $parcours['nom_competence'];?>">  
<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<div class="invisible"><input type="text" name="type_competence" value="<?php echo $parcours["type_competence"];?>" ></div>

<?php  
$parcours =$q->fetch();

}?>

 
<label for="description"> description</label> 
<input type="text" id= "description" name="description"> <br>
<label for=" mot_cles"> mot clés</label> 
<input type="text" id= "mot_cle" name="mot_cle">
</div>
<input type="submit" value ="editer" id="envoyer" name="envoyer">
<input type="reset" value ="annuler" id="annuler">

</div>

</div>
</form>


</div>

<div class="col-1 image">
</div>
</div> 
</div>

<?php 
echo "je suis la ";

if ((validate_form())&&(isset ($_POST["envoyer"])))
{
echo "hello";

$contenuformulaire["carte_id"]=$_GET["id"];
$contenuformulaire["nom"]=$_POST["nom"];
$contenuformulaire["prenom"]=$_POST ["prenom"];
$contenuformulaire["adresse"]=$_POST["adresse"];

$contenuformulaire["skills"]=$_POST["skills"];

$contenuformulaire["logiciel"]=$_POST["logiciel"];
$contenuformulaire["langue"]=$_POST["langue"];

$contenuformulaire["SGBD"]=$_POST["SGBD"];


$contenuformulaire["accomplishement"][0]["date"]=$_POST["dateaccomplishement1"];
$contenuformulaire["accomplishement"][0]["nom"]= $_POST["nomaccomplishement1"];


$contenuformulaire["accomplishement"][0]["type"]= "";
$contenuformulaire["accomplishement"][0]["lieu"]= "";

$contenuformulaire["accomplishement"][1]["date"]=$_POST["dateaccomplishement2"];
$contenuformulaire["accomplishement"][1]["nom"]= $_POST["nomaccomplishement2"];

$contenuformulaire["accomplishement"][1]["date"]= "";
$contenuformulaire["accomplishement"][1]["type"]= "";
$contenuformulaire["accomplishement"][1]["lieu"]= "";

$contenuformulaire["accomplishement"][2]["nom"]= "bac";

$contenuformulaire["accomplishement"][2]["date"]= $_POST["date_bac"];
$contenuformulaire["accomplishement"][2]["type"]= $_POST["type_bac"];
$contenuformulaire["accomplishement"][2]["lieu"]= $_POST["schoolname"];

$contenuformulaire["date_naissance"]=$_POST["datenaissance"];
$contenuformulaire["email"]=$_POST["email"];

$contenuformulaire["projet"]["nom"]=$_POST["projet"];
$contenuformulaire ["projet"]["description"]=$_POST["description"];
$contenuformulaire ["projet"]["mot_cle"]=$_POST["mot_cle"];

$contenuformulaire["idcompetence"] =$_POST["skillsid"];
var_dump ($contenuformulaire);
$sql ='select * from identite where id_carte='. $contenuformulaire["carte_id"].'';
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
{$sql ='INSERT INTO identite(id_carte,nom,prenom,adresse, date_naissance, email) 
VALUES
('.$contenuformulaire["carte_id"].',
"'.$contenuformulaire["nom"].'", 
"'.$contenuformulaire["prenom"].'",
"'.$contenuformulaire["adresse"].'",

"'.$contenuformulaire["date_naissance"].'",
"'.$contenuformulaire["email"].'");';



$q=$conn->exec($sql);

echo "donnée modifier";}
else 
{$sql ='update identite set nom = "'.$contenuformulaire["nom"].'", 
prenom="'.$contenuformulaire["prenom"].'",
adresse="'.$contenuformulaire["adresse"].'"
where id_carte='.$contenuformulaire["carte_id"].';';
echo $sql; 

$q=$conn->exec($sql);
echo "donnée mise à jour ";
	
}
$i=0;
foreach ($contenuformulaire["skills"] as $skills_element)
{?>
<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<?PHP
	$sql ='update competence set 
nom_competence="'.$skills_element.'"
where type_competence="skills" and id='.$contenuformulaire["idcompetence"][$i].';';

echo $sql;
$q=$conn->exec($sql);
$i++;
}


foreach ($contenuformulaire["logiciel"] as $logiciel_element)
{$sql ='update competence set nom_competence="'.$logiciel_element.'"  
where type_competence="logiciel" and id='.$contenuformulaire["idcompetence"][$i].';';
echo $sql;
$q=$conn->exec($sql);
$i++;
?><div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<?PHP
}
foreach ($contenuformulaire["langue"] as $langue_element)
{$sql ='update competence set nom_competence = "'.$langue_element.'" 
where type_competence="langue" and id='.$contenuformulaire["idcompetence"][$i].';';
$q=$conn->exec($sql);
echo $sql; 
echo "donnée mise à jour";
$i++;
?>
<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>
<?PHP 
}

foreach ($contenuformulaire["SGBD"] as $SGBD_element)
{$sql ='update competence set nom_competence="'.$SGBD_element.'" 
where type_competence="SGBD" and id='.$contenuformulaire["idcompetence"][$i].';';
$i++;
echo $sql; 
$q=$conn->exec($sql);
?> 
<div class="invisible"><input type="text" name="skillsid[]" value="<?php echo $parcours["id"];?>" ></div>,
<?PHP 
}


$data = [
    'nom_competence' => $contenuformulaire["projet"]["nom"],
    'keywords' => $contenuformulaire["projet"]["mot_cle"],
    'description' => $contenuformulaire["projet"]["description"],


'id' =>intval($contenuformulaire["idcompetence"][$i])
];

var_dump ($data);
$sql = "UPDATE competence SET 
nom_competence=:nom_competence, 
keywords=:keywords, 
description=:description
WHERE id=:id;";	
$stmt= $conn->prepare($sql);
echo $sql; 

$stmt->execute($data);


echo "donnee mise à jour";

foreach ($contenuformulaire["accomplishement"] as $accomplishement_element)
foreach ($accomplishement_element as $element)
{
{
$sql ='update experience set nom_experience ="'.$accomplishement_element["nom"].'",
type_experience="'.$accomplishement_element["type"].'",
lieu= "'.$accomplishement_element["lieu"].'",
date_experience=	"'.$accomplishement_element["date"].'"
 
	where id_carte='.$contenuformulaire["carte_id"].';';
echo $sql; 
		
$q=$conn->exec($sql);

echo "donnée inserée";

break;
}

}}

?>


	
 
<script src ="../../web/js/main.js"> </script>

</body> 
</html> 