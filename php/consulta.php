
<?php
require ("conectaBD.php");

$sql = $pdo->prepare(" SELECT * FROM ocorrencias" );
$sql->execute();
return $resultado = $sql->fetchAll(PDO::FETCH_OBJ);

?>
