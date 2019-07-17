<?PHP 
abstract class animal 
{public $nom="";
public $espece=""; 
public $nbpatte; 

public function __construct ($nom,$espece, $nbpatte)
{$this->nom =$nom;
$this->espece=$espece;
$this->nbpatte=$nbpatte;
}
public function __destruct () 
{
}	
 public function affiche()
{
echo "hello world <br>";
echo $this->nom ."<br>";
echo $this->espece ."<br>";
echo $this->nbpatte ."<br>";


}
}

class chien extends animal 
{public $aliment;
function __construct($nom,$espece,$nbpatte,$aliment)
{
animal::__construct($nom,$espece,$nbpatte);
$this->aliment=$aliment;

}
function affiche ()
{animal::affiche();
echo $this->aliment; 
}
}

$obj2=new  chien ("abe","chien",2,"dog food");
$obj2->affiche();
?>