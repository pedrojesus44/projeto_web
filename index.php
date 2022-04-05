<?php

require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Pedro Henrique Santos de Jesus");
echo $pessoa->getNome();

?>