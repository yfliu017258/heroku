<?php
header( 'Content-type: image/svg+xml' );

$R = 290
$backgroundX = 600
$backgroundY = 600
$panelX = 300
$panelY = 300


echo <<<SVG
	<?xml version="1.0" standalone="no"?>
	<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
	"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> 
	//<svg width="{$backgroundX}" height="{$backgroundY}" version="1.1" xmlns="http://www.w3.org/2000/svg">
	<svg width="600" height="350" version="1.1"
	 viewBox="0,0,500,300"
	 preserveAspectRatio="xMidYMid meet"
	 xmlns="http://www.w3.org/2000/svg"> 
	 
	//<circle fill="none" cx="{$panelX}" cy="{$panelX}" r="{$R}" stroke="#000000" stroke-width="10" stroke-linejoin="round">
	 
	</svg>
SVG;
?> 
