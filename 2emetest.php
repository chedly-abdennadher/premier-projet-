<?PHP
function invalide2 ($name)
{return (!isset($_POST[$name])||($_POST[$name]===""));	
}
function invalide ($name)
{return (!isset($_POST)||!array_key_exists ($name,$_POST)||($_POST[$name]==="")) ;	
}

function validateInput($name)
{$patt="/[A-Z]{1}[a-z]*/";
return (((!invalide($name))&&(preg_match($patt,$_POST[$name]))));
}
function validateDate ($name2,$maxdate,$mindate)
{if (invalide($name2)) 
{	printf ("essai encore $name2 <br>");
return false;}
else
{if (($_POST[$name2]<$mindate)||($_POST[$name2]>$maxdate))
{printf ($name2);
printf (" invalide <br>");
return false;}
else 
{printf ($_POST[$name2]);
printf (" valide <br>");
return true;}
}}
function validateEmail ($name3)
{$patt="/[A-Za-z]{1}[A-Za-z0-9]*@[a-z0-9]*.[a-z0-9]*/";
return ((!invalide($name3))&&(preg_match($patt,$_POST[$name3])));
}

function validate_form()
{$nom="nom";
$prenom="prenom";
$date_bac="date_bac";
$email="email";
$dateMax="2005-06-21";
$dateMin="1990-03-22";
$dateNaissance="datenaissance";
$v1=validateInput($nom);
$v2=validateInput($prenom);
$v3=validateDate($date_bac,$dateMax,$dateMin);
$v4=validateEmail($email);
$v5=validateDate($dateNaissance,$dateMax,$dateMin);
if (($v1)&&($v2)&&($v3)&&($v4)&&($v5))
{printf ("valide");}
}
validate_form();
require "2emetestsuite.php";
?>