<?php


$idarray= array(
array("1","82096619-fa22-4027-8fe7-f6c3a925c98f","206270177","ca-app-pub-8872907273957591~1503438261","ca-app-pub-8872907273957591/5031619733","0","0","0","http://lmaz3ot.github.io/outside/sticker.php","0","0","0")


);

$r=rand(0,0);
$turnonJSON=$idarray[$r][0];
$idAppnext=$idarray[$r][1];
$idStartapp=$idarray[$r][2];
$idAdmob=$idarray[$r][3];
$placementAdmob=$idarray[$r][4];
$turnAppnext=$idarray[$r][5];
$turnStartapp=$idarray[$r][6];
$turnAdmob=$idarray[$r][7];
$idURL=$idarray[$r][8];
$turnURLads=$idarray[$r][9];
$forceRate=$idarray[$r][10];
$hideIcon=$idarray[$r][11];

$data = array('turnonJSON' => $turnonJSON,
'idAppnext' => $idAppnext,
'idStartapp' => $idStartapp, 
'idAdmob' => $idAdmob, 
'placementAdmob' => $placementAdmob, 
'turnAppnext' => $turnAppnext, 
'turnStartapp' => $turnStartapp, 
'turnAdmob' => $turnAdmob, 
'idURL' => $idURL, 
'turnURLads' => $turnURLads, 
'forceRate' => $forceRate,
'hideIcon' => $hideIcon
);
header('Content-type: application/json');
echo json_encode( $data );

?>
