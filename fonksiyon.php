<?php

$dizi = ["mehmet", "bugün", "bir", "yazılım", "yapacak"];
print_r($dizi);
$rev= array_reverse($dizi);
print_r($rev);


/*$dizi2 = ["yazılım", "geliştirmek", "ve", "algoritma", "üretmek","çok","zevkli","bir","iş"];
print_r($dizi2);
$rev= array_reverse($dizi2);
print_r($rev);*/

$dizi2 =array(
	1=> 'yazılım',
	2=> 'geliştirmek',
	3=> 've',
	4=> 'algoritma',
	5=> 'üretmek',
	6=> 'çok',
	7=> 'zevkli',
	8=> 'bir',
	9=> 'iş');
print_r($dizi2);

$rev= array_reverse($dizi2);
print_r($rev);

$veri = array_key_exists(10,$dizi2);
if ($veri){
	echo 'Anahtar dizide mevcut';
}else{
	echo 'Yanlış Parametre girişi';
}


