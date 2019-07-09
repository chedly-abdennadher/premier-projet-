<?php 
$contenuformulaire["nom"]="abdennadher";
$contenuformulaire["prenom"]="chedly";
$contenuformulaire["adresse"]="8 rue des roses";
$contenuformulaire["skills"]["skills1"]="javascript";
$contenuformulaire["skills"]["skills2"]="css3";
$contenuformulaire["skills"]["skills3"]="html5";
$contenuformulaire["skills"]["skills4"]="sql";
$contenuformulaire["skills"]["skills5"]="pl-sql";
$contenuformulaire["skills"]["skills6"]="connaisance en systeme d'exploitation windows linux";
$contenuformulaire["logiciel"]="microsoft word";
$contenuformulaire["langue"]["langue1"]="english";
$contenuformulaire["langue"]["langue2"]="français";
$contenuformulaire["langue"]["langue3"]="arabe";
$contenuformulaire["SGBD"]="oracle";
$contenuformulaire["projet"]="site e-commerce";
$contenuformulaire["description"]="	developpement d'un site de boutique en ligne dans le cadre d'un projet universitaire";
$contenuformulaire["motcle"]["motcle1"]= "php";
$contenuformulaire["motcle"]["motcle2"]= "HTML";
$contenuformulaire["motcle"]["motcle3"]= "CSS";
$contenuformulaire["motcle"]["motcle4"]= "javascript";
$contenuformulaire["motcle"]["motcle5"]= "bootstrap";
$contenuformulaire["accomplishement"]["accomplishement1"]["date"]= "2018-2019";
$contenuformulaire["accomplishement"]["accomplishement1"]["nom"]= "stage dream tek";
$contenuformulaire["accomplishement"]["accomplishement2"]["date"]= "2017-2018";
$contenuformulaire["accomplishement"]["accomplishement2"]["nom"]= "license fondamentale en science informatique";
$contenuformulaire["accomplishement"]["accomplishement3"]["date"]= "2016-2017";
$contenuformulaire["accomplishement"]["accomplishement3"]["nom"]= "diplome bac math";

$contenuformulaire["date_naissance"]="25/07/1997";
$contenuformulaire["email"]="abdennadher.chedly@gmail.com ";

?>
<!doctype html> 
<html> 
<head>
<meta charset ="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel ="stylesheet" href="cv2.css"> <div class="container">
</head>
<body>
<div class="row"> 
<div class="col-8"> 
<h2><div class="e"> experience </div></h2>
<h2><div class="acc"> accomplishement </div> </h2>
<div class= "date"> <?php printf ($contenuformulaire["accomplishement"]["accomplishement1"]["date"]); ?> </div><br>
<ul>
<li><?php echo $contenuformulaire["accomplishement"]["accomplishement1"]["nom"]; ?></li>

</ul>
<h2><div class="e"> education </div></h2>
<h2> diploma </h2>
 
<div class="date"> <?php echo $contenuformulaire["accomplishement"]["accomplishement2"]["date"];?></div> <br>
<?php echo $contenuformulaire["accomplishement"]["accomplishement2"]["nom"];?> <br> 
<hr>
school name istic borj cedria <br>
<hr>
<div class="date"> <?php echo $contenuformulaire["accomplishement"]["accomplishement3"]["date"] ;?></div> <br>
<?php echo $contenuformulaire["accomplishement"]["accomplishement3"]["nom"] ;?>
<hr> 
<h2><div class="e"> reference</div></h2>

</div>
<div class="col-3 border-left"> 
<img src="index.jpeg">
<div class="row"> 
<div class="col-12"> 
<div class="nom"> <h1> <?php echo $contenuformulaire["nom"]; ?> </h1></div>
<div class="nom"> <h1><?php echo $contenuformulaire["prenom"]; ?> </h1> </div> 
<h2> development </h2> <br>
adress  <br>
<?php echo $contenuformulaire["adresse"]; ?><br> 
<?php echo $contenuformulaire["email"]; ?> <br>
<h2> <div class="nom">summary</div> </h2>
<h2><div class="nom"> skills </div> </h2> 
<div class="col-12"> 
<hl> 
<ul> 
<li> <?php echo $contenuformulaire["skills"]["skills1"]?></li> 
<li> <?php echo $contenuformulaire["skills"]["skills2"]?></li> 
<li> <?php echo $contenuformulaire["skills"]["skills3"]?> </li> 
<li> <?php echo $contenuformulaire["skills"]["skills4"]?> </li>
<li> <?php echo $contenuformulaire["skills"]["skills5"]?> </li>
<li> <?php echo $contenuformulaire["skills"]["skills6"]?> </li>
<li> c,c++,java </li>
</ul>
</hl> 
</div>

</div>
</div>
<h2><div class="nom">logiciel</div> </h2>
<?php echo $contenuformulaire["logiciel"];?> <br>
<h2><div class"nom"> SGBD</div></h2>
<?php echo $contenuformulaire["SGBD"];?>  <br>
<h2><div class="nom"> langue </div></h2>
<ul> 
<li> <?php echo $contenuformulaire["langue"]["langue1"];?> </li>
<li> <?php echo $contenuformulaire["langue"]["langue2"];?> </li>
<li> <?php echo $contenuformulaire["langue"]["langue3"];?> </li>
</ul>
<div class="nom"> projet </div>
<?php echo $contenuformulaire["projet"];?><br> 
<h2><div class="nom"> description</div> </h2>
<?php echo $contenuformulaire["description"];?> 
<h2> mots clés </h2>
<ul> 
<li><?php echo $contenuformulaire["motcle"]["motcle1"];?></li> 
<li> <?php echo $contenuformulaire["motcle"]["motcle2"];?> </li>
<li> <?php echo $contenuformulaire["motcle"]["motcle3"];?> </li>
<li><?php echo $contenuformulaire["motcle"]["motcle4"];?> </li>
<li> <?php echo $contenuformulaire["motcle"]["motcle5"];?> </li>
</ul>
</div>

<div class="col-1 image">
</div>
</div> 
</div>';
</body>
</html>
