<?php
function mi_a_km ($a){
	$conversion = $a*1.609;
	echo “El resultado de milla a kilometro es: ”, $conversion;
}
mi_a_km(5);

function km_a_mi ($a){
	$conversion = $a*0.62;
	echo “El resultado de kilometro a milla es: ”, $conversion;
}
km_a_mi(5);

function c_a_f ($a){
	$conversion = ($a*1.8)+32;
	echo “El resultado de celsius a fahrenheit  es: ”, $conversion;
}
f_a_c(30);

function f_a_c ($a){
	$conversion = ($a-32)/1.8;
	echo “El resultado de fahrenheit a celsius es: ”, $conversion;
}
f_a_c(30);

function li_a_g ($a){
	$conversion = $a*453.59;
	echo “El resultado de libras a gramos es: ”, $conversion;
}
li_a_g(30);

function floz_a_l ($a){
	$conversion = $a/33.814;
	echo “El resultado de Onzas líquidas a litros es: ”, $conversion;
}
floz_a_l(30);

function l_a_floz ($a){
	$conversion = $a*33.814;
	echo “El resultado de litros a Onzas líquidas es: ”, $conversion;
}
l_a_floz(30);

¿>
