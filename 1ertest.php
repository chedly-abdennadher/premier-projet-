<?php
function somme ($a,$b)
{$c=$a+$b;
return $c;
}
$tab=[5=>30,4=>"abc",'a'=>3.5];
printf ("la case du tableau $tab[5] <br> ");
printf ("la case du tableau $tab[4] <br>");
if ($tab[5]==3)
printf ("<br> je suis la ");
else 
{$tab[4]="bde";
printf ("la case du tableau $tab[4] <br>");}
if ($tab["a"]==3.5)
{printf ("la case du tableau {$tab['a']}");}
elseif ($tab['a']==4.5)
{$tab['a']=53;
printf ($tab['a']);}
printf (" <br>");
foreach ($tab as $clef =>$valeur) 
{printf ("tab[$clef]=");
printf ("$tab[$clef] <br>");
}
$a=2;
$b=3;
$c=somme($a,$b);
printf ("somme $a+ $b= $c");
?>
