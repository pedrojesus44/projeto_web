<?php

require_once("pessoa.class.php");
require_once("empresa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Pedro Henrique Santos de Jesus");
echo $pessoa->getNome();

$empresa = new Empresa();
$empresa->setRazaoSocial("Escola XPTO LTDA");
echo $empresa->getRazaoSocial();

?>