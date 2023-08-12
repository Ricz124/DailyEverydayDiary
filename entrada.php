<?php

$data    = $_GET["data"];
$numero  = $_GET["numero"];
$titulo  = $_GET["titulo"];
$desc    = $_GET["desc"];
$comofoi = $_GET["comofoi"];

echo 'Dia: ' . $data . ' ' . 'Entrada Número: ' . '<b>' . '#' . $numero . '</b>' . '<br>';
echo '<br>';
echo '<b>' . $titulo . '</b>' . '<br>';
echo '<br>';
echo 'Esse dia foi: ' . $comofoi . '<br>';

echo '<br>';
echo '<br>';

echo $desc;