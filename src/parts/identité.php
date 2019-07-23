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
<?php 
foreach ($contenuformulaire["skills"] as $cles =>$value)
{?> <li> <?php echo $value; ?></li> <?php }?>

</ul>
</hl> 
</div>

</div>
