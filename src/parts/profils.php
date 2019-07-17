<!doctype html> 
<html> 
<head> 
<meta charset ="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel ="stylesheet" href="../../web/css/cv2.css">
<link rel ="stylesheet" href="../../web/css/erreur.css">

</head> 
<body> 
<?PHP
require 'phpmysqlconnect.php';
$sql ="select * from identite";
$identite =$conn->query($sql);
$identite->setFetchMode(PDO::FETCH_ASSOC);
$i=0;
while ($parcours=$identite->fetch()) 
{$i++;
echo "<table border>. <tr> <td>" ."ligne $i "."</td> <br>";
foreach ($parcours as $clef=>$value)
{
 
echo "<tr> <td>". $clef ."</td> <br>";
echo "<td>". $value ."</td> </tr><br>";	
}
echo "</table>";
}
?>
<button type="button" class="btn btn-danger"> <a href ="http://localhost/php/src/parts/editformulaire.php "> ajouter </a> </button>
<button type="button" class="btn btn-danger"> editer </button>

</body>
</html>
