<?php

$sunAz=100;
$sunEl=10;
$pvAz=185;
$pvEl=19;

echo CalOffAxis($sunAz,$sunEl,$pvAz,$pvEl);


function CalOffAxis($sunAz,$sunEl,$pvAz,$pvEl){
	$phiSun=(90-$sunEl)*pi()/180 ;
	$theSun=(270-$sunAz)*pi()/180;
	$phiPV=(90-$pvEl)*pi()/180 ;
	$thePV=(270-$pvAz)*pi()/180;
	
	// ===== Ψ=arccos(sinθ1sinθ2+cosθ1cosθ2cos(ϕ1−ϕ2))=====
	$offAx=acos(sin($theSun)*sin($thePV)+cos($theSun)*cos($thePV)*2*cos($phiSun-$phiPV));
	
	return $offAx*180/pi();
}

?>