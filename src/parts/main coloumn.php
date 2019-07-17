<div class="col-8"> 
<h2><div class="e"> experience </div></h2>
<h2><div class="acc"> accomplishement </div> </h2>

<h2><div class="e"> education </div></h2>
<h2> diploma </h2>
 
<?php 
class accomplishement 
{
private $date="";
private $nom=""; 
public function __construct ($date,$nom)
{$this->date=$date;
$this->nom=$nom;
}
public function get_date ()
{return $this->date;
	
}
public function get_nom ()
{return $this->nom;
	
}
public function set_date ($date)
{$this->date=$date;
}
public function set_nom ($nom)
{$this->nom=$nom;	
}
}

$tab = [];

$retourligne="".PHP_EOL;
$nomfichier="essai.txt";
$ressource=fopen ($nomfichier,'r+');
$i=0;
require 'phpmysqlconnect.php';
$sql ="select * from accomplishement";
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$r=$q->fetch();

for ($i=0;$i<2;$i++)
{
$date=$r["date_acc"];
$nom=$r["nom"];

	$tab[$i]=new accomplishement($date,$nom);
$r=$q->fetch();	
}

foreach ($tab as $clef =>$value)
{?>
<div class="date">
<?php echo $value->get_date()."<br>";?></div>
<?php echo $value->get_nom();
}?>


	<br> 
<?php ?>
<hr>
school name istic borj cedria <br>
<hr>
<hr> 
<h2><div class="e"> reference</div></h2>

</div>
