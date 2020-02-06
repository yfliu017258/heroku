<?php
header( 'Content-type: image/svg+xml' );


$R = 290;
$SL = 250;
$ML = 200;
$HL = 150;
$bgdX = 600;
$bgdY = 600;
$PX = 300;
$PY = 300;


echo <<<SVG
<?xml version="1.0" standalone="no"?>	
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
	"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> 
<svg width="{$bgdX}" height="{$bgdY}" version="1.1"
	 xmlns="http://www.w3.org/2000/svg"> 
	 
	<circle id="panel" cx="{$PX}" cy="{$PY}" r="{$R}" fill="none" stroke="#000000" stroke-width="10"/>
	<circle id="point" cx="{$PX}" cy="{$PY}" r="10" fill="#000000" stroke="#000000" stroke-width="10"/>
	
	/*<line id="second"  points="{$PX},{$PY} {$PX},{$PY+$SL}" fill="#000000" stroke="#000000" stroke-width="2" stroke-linecap="round"> 
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>*/
	<line id="minute"  x1="{$PX}" y1="{$PY}" x2="{$PX}" y2="100" fill="#333333" stroke="#333333" stroke-width="5" stroke-linecap="round">
	//	<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	/*<line id="hour"  points="{$PX},{$PY} {$PX},{$PY+$HL}" fill="#666666" stroke="#666666" stroke-width="15" stroke-linecap="round">
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$panelY}"/>
	</line>*/
	/*
	<text x="0,20,50,80,120" y="60,80,70,55,60" style="font-size:24px;">123456789</text>  
	<text x="0,20,50,80,120" y="60,80,70,55,60" style="font-size:24px;">10</text>  
	<text x="0,20,50,80,120" y="60,80,70,55,60" style="font-size:24px;">11</text>  
	<text x="0,20,50,80,120" y="60,80,70,55,60" style="font-size:24px;">12</text>  */
</svg>
SVG;
?> 
