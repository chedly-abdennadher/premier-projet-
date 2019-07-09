<?php
$retourligne="".PHP_EOL;
$nomfichier="essai.txt";
$ressource=fopen ($nomfichier,'r+');
$contenufichier=file_get_contents ($nomfichier);
echo ($contenufichier);
fclose($ressource); 

?>