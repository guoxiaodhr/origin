<?php

$cars=array("Volvo","BMW","SAAB");


function arrayToXml($arr){ 
	$xml = "<root>"; 
	foreach ($arr as $key=>$val){ 
	if(is_array($val)){ 
	$xml.="<".$key.">".arrayToXml($val)."</".$key.">"; 
	}else{ 
	$xml.="<".$key.">".$val."</".$key.">"; 
	} 
	} 
	$xml.="</root>"; 
	return $xml; 
}						

echo arrayToXml($cars) ;


echo 'asdasdadas';					
?>

