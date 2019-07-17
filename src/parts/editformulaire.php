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
<form onsubmit="return validate_form()" novalidate id="form1"
 method="post" action="http://localhost/php/src/parts/editformulaire.php">
 <?php
include "./2emetest.php";
?>
<h2><div class="e"> experience </div></h2>
 
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
<input type ="date" id="datebac" name="date_bac">
<hr>
 
<h2><div class="e"> reference</div></h2>
</div>
<div class="col-3 border-left"> 
<img src="../../web/image/index.jpeg">
<div class="row"> 
<div class="col-12"> 
<label for="nom"> nom</label>
<?php
if (!validateInput("nom"))
{
echo "<span class='dirty'>champ invalide </span>";}
	?>
<input type="text" name="nom" id="nom" class="text <?php if (!validateInput('nom')) echo 'error_input'; ?>" pattern ="[A-Z]{1}[a-z]*" 
value="<?php if (isset($_POST)&&(isset($_POST['nom']))){echo $_POST['nom'];}?>">


	
<label for ="prenom"> prenom</label> 
<input type ="text"id="prenom" pattern ="[A-Z]{1}[a-z]*" 
class="text <?php if ((isset($_POST['prenom']))&&(isset($_POST))&&(!validateInput('prenom'))){echo'error_input';}?>" 
name="prenom"
value="<?php if (isset($_POST)&&(isset($_POST['prenom']))){echo $_POST['prenom'];}?>">
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
 $nbSkills = 1;
 if (isset($_POST) && isset($_POST["skills"])){

	 $nbSkills = count($_POST["skills"]);

 }
 if(isset($_POST) && isset($_POST["ajouter_skills"])){
	 echo "ici";
	 $nbSkills++;
 }
for($i=0; $i<$nbSkills ; $i++){?>
<input type ="text"  name="skills[]" 
value="<?php if(isset($_POST) && isset($_POST["skills"]) && isset($_POST["skills"][$i])) echo $_POST["skills"][$i];?>">  
<?php }?>
<input type= "submit" value="ajouter skills" name="ajouter_skills" class="ajout">
	

<div>logiciel</div> 

<?php 
$nblogiciel =1; 
if (isset($_POST) && isset ($_POST["logiciel"]))
{$nblogiciel = count($_POST["logiciel"]);}
if (isset ($_POST) && isset ($_POST ["ajout_logiciel"]))
{$nblogiciel++;}

for ($i=0;$i<$nblogiciel;$i++)
{?> 
<input type ="text" name="logiciel[]" value= '<?PHP 
if (isset($_POST) && isset($_POST["logiciel"]) &&isset ($_POST["logiciel"][$i]))
{echo $_POST["logiciel"][$i];}?>' > 
<?PHP 
 }	 
?>
<input type="submit" name= "ajout_logiciel" value= "ajouterlogiciel"> <br>
<div> SGBD </div>
<?PHP 
$nbsgbd=1; 
if (isset ($_POST)&& isset ($_POST["SGBD"]))
{
$nbsgbd =count($_POST["SGBD"]); 	
}
if (isset ($_POST)&& isset ($_POST["ajout_SGBD"]))
{$nbsgbd++;
	
}
for ($i=0;$i<$nbsgbd;$i++) 
{?> <input type="text" name= "SGBD[]" 
value= '<?PHP if (isset($_POST)&& isset ($_POST["SGBD"])&& isset ($_POST["SGBD"][$i]))
echo $_POST["SGBD"][$i];?> '>
<?PHP 

}	
?>
<input type="submit" value="ajouterSGBD" name="ajout_SGBD">
<div> langue </div>

<?PHP 
$nblangue =1; 
if (isset ($_POST)&& isset ($_POST["langue"]))
{
$nblangue =count($_POST["langue"]); 	
}
if (isset ($_POST)&& isset ($_POST["ajout_langue"]))
{$nblangue++;
	
}
for ($i=0;$i<$nblangue;$i++) 
{?> <input type="text" name= "langue[]" 
value= '<?PHP if (isset($_POST)&& isset ($_POST["langue"])&& isset ($_POST["langue"][$i]))
echo $_POST["langue"][$i];?> '>
<?PHP 

}	
?>
<input type="submit" value="ajouterlangue" name="ajout_langue">

<label for ="projet"> projet 
<input type ="text" id="projet" name="projet"> <br> 
<label for="description"> description</label> 
<input type="text" id= "description" name="description"> <br>
<label for=" mot_cles"> mot clés</label> 
<input type="text" id= "mot_cle" name="mot_cle">
</div>
<input type="submit" value ="envoyer" id="envoyer" name="envoyer">
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

if ((validate_form())&&(isset ($_POST["envoyer"])))
{
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

require 'phpmysqlconnect.php';
$sql ='INSERT INTO identite(nom,prenom,adresse, date_naissance, email) 
VALUES
("'.$contenuformulaire["nom"].'", 
"'.$contenuformulaire["prenom"].'",
"'.$contenuformulaire["adresse"].'",

"'.$contenuformulaire["date_naissance"].'",
"'.$contenuformulaire["email"].'");';



$q=$conn->exec($sql);
echo "donnée inserée";


foreach ($contenuformulaire["skills"] as $skills_element)
{
	$sql ='INSERT INTO competence(nom_competence,type_competence,date_competence) 
VALUES
("'.$skills_element.'", "skills",NULL);';
$q=$conn->exec($sql);}
foreach ($contenuformulaire["logiciel"] as $logiciel_element)
{$sql ='INSERT INTO competence(nom_competence,type_competence,date_competence) 
VALUES
("'.$logiciel_element.'", "logiciel",NULL);';
$q=$conn->exec($sql);}
foreach ($contenuformulaire["langue"] as $langue_element)
{$sql ='INSERT INTO competence(nom_competence,type_competence,date_competence) 
VALUES
("'.$langue_element.'", "langue",NULL);';
$q=$conn->exec($sql);

echo "donnée inserée";}

foreach ($contenuformulaire["SGBD"] as $SGBD_element)
{$sql ='INSERT INTO competence(nom_competence,type_competence,date_competence) 
VALUES
("'.$SGBD_element.'", "SGBD",NULL);';
$q=$conn->exec($sql);}
foreach ($contenuformulaire["langue"] as $langue_element)
{$sql ='INSERT INTO competence(nom_competence,type_competence,date_competence) 
VALUES
("'.$langue_element.'", "langue",NULL);';
$q=$conn->exec($sql);

echo "donnée inserée";}
$sql ='INSERT INTO competence(nom_competence,type_competence,date_competence,keywords,description) 
VALUES
("'.$contenuformulaire["projet"]["nom"].'", "projet",NULL,
"'.$contenuformulaire["projet"]["mot_cle"].'","'.$contenuformulaire["projet"]["description"].'");';
 
$q=$conn->exec($sql);

echo "donnée inserée";

foreach ($contenuformulaire["accomplishement"] as $accomplishement_element)
foreach ($accomplishement_element as $element)
{
{
$sql ='INSERT INTO experience(nom_experience,type_experience,lieu,date_experience) 
VALUES
("'.$accomplishement_element["nom"].'",
"'.$accomplishement_element["type"].'",
"'.$accomplishement_element["lieu"].'",
	"'.$accomplishement_element["date"].'");';
		
$q=$conn->exec($sql);

echo "donnée inserée";

break;}

}}
?>


	
 
<script src ="../../web/js/main.js"> </script>

</body> 
</html> 