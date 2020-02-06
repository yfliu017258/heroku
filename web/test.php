<?php
header( 'Content-type: image/svg+xml' );


$R = 290;
$SL = 250;
$ML = 200;
$HL = 150;
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
	
	/*<line id="second"  points="{$panelX},{$panelY} {$panelX},{$panelY+$SL}" fill="#000000" stroke="#000000" stroke-width="2" stroke-linecap="round"> 
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$panelX},{$panelY}" to="360,{$panelX},{$panelY}"/>
	</line>*/
	<line id="minute"  x1="{$panelX}" y1="{$panelY}" x2="{$panelX}",y2="100" fill="#333333" stroke="#333333" stroke-width="5" stroke-linecap="round">
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$panelX},{$panelY}" to="360,{$panelX},{$panelY}"/>
	</line>
	/*<line id="hour"  points="{$panelX},{$panelY} {$panelX},{$panelY+$HL}" fill="#666666" stroke="#666666" stroke-width="15" stroke-linecap="round">
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$panelX},{$panelY}" to="360,{$panelX},{$panelY}"/>
	</line>*/
</svg>
SVG;
?> 
