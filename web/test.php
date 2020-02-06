<?php
header( 'Content-type: image/svg+xml' );


$R = 290;
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
	
	<rect id="second" >
</svg>
SVG;
?> 
