<?php 
function afficheForm() 
{foreach ($_POST as $clef=>$valeur)
{printf (" <form> <label> $clef </label>");
printf ('<div><input type="text" placeholder="'.$_POST[$clef].'">  </div>'); 
}}
printf ("resume <br>");
afficheForm();
?> 