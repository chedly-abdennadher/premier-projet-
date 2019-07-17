<?php 
function afficheForm() 
{foreach ($_POST as $clef=>$valeur)
{printf (" <form> <label> $clef </label>");
if (!is_array ($valeur) )
{printf ('<div><input type="text" value="'.$valeur.'">  </div>'); }
else
{foreach ($valeur as $valeur2) 
{
printf ('<div><input type="text" value="'.$valeur2.'">  </div>'); 	
}
}}
printf ("resume <br>");}
afficheForm();
?> 