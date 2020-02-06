<?php
header( 'Content-type: image/svg+xml' );


$R = 290;
$SL = 280;
$ML = 250;
$HL = 200;
$backgroundX = 600;
$backgroundY = 600;
$panelX = 300;
$panelY = 300;


echo <<<SVG
<?xml version="1.0" standalone="no"?>	
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
	"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> 
<svg width="{$backgroundX}" height="{$backgroundY}" version="1.1"
	 xmlns="http://www.w3.org/2000/svg"> 
	 
	<circle id="panel" cx="{$panelX}" cy="{$panelY}" r="{$R}" fill="none" stroke="#000000" stroke-width="10"/>
	<circle id="point" cx="{$panelX}" cy="{$panelY}" r="10" fill="#000000" stroke="#000000" stroke-width="10"/>
	
	<rect id="second"  x="{$panelX}" y="{$panelY}" width="10" height="{$SL}" fill="#000000" stroke="#000000" stroke-width="10" stroke-linecap="round"/>
	<rect id="minute"  x="{$panelX}" y="{$panelY}" width="20" height="{$ML}" fill="#333333" stroke="#333333" stroke-width="10" stroke-linecap="round"/>
	<rect id="hour"  x="{$panelX}" y="{$panelY}" width="50" height="{$HL}" fill="#666666" stroke="#666666" stroke-width="10" stroke-linecap="round"/>
</svg>
SVG;
?> 
