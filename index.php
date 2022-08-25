<?php
include './style.php';
require_once __DIR__ . '/vendor/autoload.php';

echo '<h1>Expressões regulares</h1>';

echo '<h2>1 - Estrutura</h2>';

$pattern = '/lucas/';
$subject = 'lucas alves';
$result = preg_match($pattern, $subject);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';

echo '<hr><h2>2 - Início e fim</h2>';

//$pattern = '/lucas/';
//$pattern = '/^lucas/';
//$pattern = '/alves$/';
$pattern = '/^alves$/';
$subject = 'alves';
$result = preg_match($pattern, $subject);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';

echo '<hr><h2>3 - Conjuntos []</h2>';

//$pattern = '/[alves]/';
//$pattern = '/[a-zA-Z]/';
//$pattern = '/[0-9]/';
$pattern = '/[a-zA-Z0-9]\-/';
$subject = 'Lucas-123';
$result = preg_match($pattern, $subject);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';

echo '<hr><h2>4 - Definindo ocorrências {})</h2>';

//$pattern = '/^[0-9]{3}/';
$pattern = '/^[0-9]{4}[a-z]{2,5}$/';
$subject = '1234lucas';
$result = preg_match($pattern, $subject);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';

echo '<hr><h2>5 - Ocorrências opcionais)</h2>';

//$pattern = '/jp[a-z]?g/';
$pattern = '/jpe?g/';
$subject = 'jpg';
$result = preg_match($pattern, $subject);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';

echo '<hr><h2>6 - Nenhuma ou diversas Ocorrências)</h2>';

//$pattern = '/^te*ste*$/';
$pattern = '/^teste.*legal$/';
$subject = 'teste lucas legal';
$result = preg_match($pattern, $subject);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';

echo '<hr><h2>7 - Mínimo uma Ocorrências</h2>';

//$pattern = '/^te*ste*$/';
$pattern = '/^[0-9a-zA-Z\-]+\.txt$/';
$subject = 'lucas-alves.txt';
$result = preg_match($pattern, $subject);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';

echo '<hr><h2>8 - Grupos</h2>';

//$pattern = '/^te*ste*$/';
$pattern = '/^([0-9a-zA-Z\-]+)\.(txt)$/';
$subject = 'lucas-alves.txt';
$result = preg_match($pattern, $subject, $mathces);
echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';
d($mathces);

echo '<hr><h2>9 - Formatação com grupos</h2>';

$pattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';
$subject = '70231578083';
$result = preg_match($pattern, $subject, $mathces);
$replace = preg_replace($pattern, '$1.$2.$3-$4', $subject);

echo '<pre>';print_r($pattern);echo '</pre>';
echo '<pre>';print_r($subject);d($result);echo '</pre>';
d($mathces);
echo '<pre>';print_r($replace);echo '</pre>';
