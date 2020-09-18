<?php


$idarray= array(
array("0",
"ca-app-pub-8872907273957591~1503438261",
"ca-app-pub-8872907273957591/5031619733",
"0",
"0")
);

$r=rand(0,0);
$turnonJSON=$idarray[$r][0];
$idAdmob=$idarray[$r][1];
$placementAdmob=$idarray[$r][2];
$turnAdmob=$idarray[$r][3];
$hideIcon=$idarray[$r][4];

$data = array('turnonJSON' => $turnonJSON,
'idAdmob' => $idAdmob, 
'placementAdmob' => $placementAdmob,
'turnAdmob' => $turnAdmob, 
'hideIcon' => $hideIcon
);
header('Content-type: application/json');
echo json_encode( $data );

?>
