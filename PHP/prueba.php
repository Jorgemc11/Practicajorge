<?php
$archivo="datos.txt";
$fp=fopen($archivo, 'w');
$fputs($fp, 'Bienvenidos programadores en php');
fclose($fp);

?>