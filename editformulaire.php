<!doctype html> 
<html> 
<head> 
<meta charset ="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel ="stylesheet" href="cv2.css">
<link rel ="stylesheet" href="erreur.css">

</head> 
<body> 

<div class="container">
<div class="row"> 
<div class="col-8"> 
<form onsubmit="return validate_form()" novalidate id="form1"
 method="post" action="http://localhost/php/editformulaire.php">
 <?php
include "./2emetest.php";
?>
<h2><div class="e"> experience </div></h2>
<label for ="exp1"> experience1</label>
<input type="text" id="experience1" name="experience1"> 
<h2><div class="acc"> accomplishement </div> </h2>
<label for ="accomplishement1"> nom accomplishement 1</label>
<input type="text" id ="nomaccomplishement1" class="text" name="nomaccomplishement1"> <br>
<label for ="dateaccomplishement1"> date accomplishement 1 </label> 
<input type="text" id="dateaccomplishement1">  
<h2><div class="e"> education </div></h2>
<h2> diploma </h2>
 
<label for ="datediploma1"> date diploma 1</label> 
<input type ="text" id ="datediploma1"> 
<hr>
<label for ="schoolname">school name </label> 
<input type="text" id="schoolname"> </label>
<hr>
<label for ="dbc"> type bac </label> 
<select>
<option value="option1"> math</option>
<option value="option2"> science</option>
<option value="option1"> écho</option>
<option value="option2"> lettre</option>

</select>
<br>
<label for ="datebac"> date bac </label> 
<input type ="date" id="datebac" name="date_bac">
<hr>
 
<h2><div class="e"> reference</div></h2>
</div>
<div class="col-3 border-left"> 
<img src="index.jpeg">
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


	</div>
<label for ="prenom"> prenom</label> 
<input type ="text"id="prenom" pattern ="[A-Z]{1}[a-z]*" 
class="text <?php if ((isset($_POST['prenom']))&&(isset($_POST))&&(!validateInput('prenom'))){echo'error_input';}?>" 
name="prenom"
value="<?php if (isset($_POST)&&(isset($_POST['prenom']))){echo $_POST['prenom'];}?>">
<h2> development </h2> <br>
<label for ="adress">adress  </label>
<input type="text" id ="adress"><br>
<label for ="datenaissance"> date naissance </label>
<input type="date" id ="datenaissance" name="datenaissance" 
value="<?php if (isset($_POST)&&(isset($_POST['datenaissance']))){echo $_POST['datenaissance'];}?>"
class="<?php if ((isset($_POST['datenaissance']))&&(isset($_POST))&&(!validateDate('datenaissance','2005-12-12','1990-01-01'))){echo'error_input';}?>">  
<label for ="adresseemail"> email </label>
<input type="email" id ="adresseemail" name="email" value="<?php if (isset($_POST)&&(isset($_POST['email']))){echo $_POST['email'];}?>"
class="<?php if ((isset($_POST['email']))&&(isset($_POST))&&(!validateEmail('email'))){echo'error_input';}?> "> <br>

<h2> <div class="nom">summary </div> </h2> 
<h2><div class="nom"> skills </div> </h2> 
<div class="col-12"> 
<label for =" skills1"> skills</label>
<input type ="text" id="skills1">  
<label for =" skills2"> skills</label>
<input type ="text" id="skills2">  
<label for =" skills3"> skills</label>
<input type ="text" id="skills3">  
 
</div>

</div>
</div>
<label for ="logiciel">logiciel1</label> 
<input type="text"id="logiciel1">  
<label for ="logiciel">logiciel2</label> 
<input type="text" id="logiciel2">  
<label for ="logiciel">logiciel3</label> 
<input type="text" id="logiciel3">  

<label for ="SGBD"> SGBD1</label>
<input type="text"id="SGBD1"> 
<label for ="SGBD"> SGBD2</label>
<input type="text" id="SGBD2"> 

<h2><div class="nom"> langue </div></h2>
<label for ="langue1"> langue1 </label>
<input type="text" id="langue1">
<label for ="langue2"> langue2 </label>
<input type="text" id="langue2">
<label for ="langue3"> langue3 </label>
<input type="text" id="langue3">

<label for ="projet"> projet 
<input type ="text" id="projet"> <br> 
<label for="description"> description</label> 
<input type="text" id= "description"> <br>
<label for=" mot_cles"> mot clés</label> 
<input type="text" id= "mot_cle">
<input type="submit" value ="envoyer" id="envoyer">
<input type="reset" value ="annuler" id="annuler">
</form>


</div>

<div class="col-1 image">
</div>
</div> 
</div>
?>
</body> 
</html> 
