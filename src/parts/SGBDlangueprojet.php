<h2><div class="nom">logiciel</div> </h2>
<?php echo $contenuformulaire["logiciel"];?> <br>
<h2><div class"nom"> SGBD</div></h2>
<?php echo $contenuformulaire["SGBD"];?>  <br>
<h2><div class="nom"> langue </div></h2>
<ul> 
<?php foreach ($contenuformulaire["langue"] as $cles =>$value)
{
?> <li><?php echo  $value;?>
</li><?php ;}?>
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
