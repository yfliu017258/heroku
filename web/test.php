<?php
header( 'Content-type: image/svg+xml' );


$ds = strtotime("now")-strtotime("2020-02-06 16:00:00");
$H=($ds%43200)/3600;
$M=($ds%3600)/60;
$S=$ds%60;

$R = 290;
$SL = 250;
$ML = 200;
$HL = 150;
$bgdX = 600;
$bgdY = 600;
$PX = 300;
$PY = 300;

$HX=sin(deg2rad($H*30))*$R+$PX;
$MX=sin(deg2rad($M*6))*$R+$PX;
$SX=sin(deg2rad($S*6))*$R+$PX;
$HY=cos(deg2rad($H*30))*$R+$PY;
$MY=cos(deg2rad($M*6))*$R+$PY;
$SY=cos(deg2rad($S*6))*$R+$PY;


echo <<<SVG
<?xml version="1.0" standalone="no"?>	
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
	"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> 
<svg width="{$bgdX}" height="{$bgdY}" version="1.1"
	 xmlns="http://www.w3.org/2000/svg"> 
	 
	<circle id="panel" cx="{$PX}" cy="{$PY}" r="{$R}" fill="none" stroke="#000000" stroke-width="10"/>
	
	<line id="hour"  x1="{$PX}" y1="{$PY}" x2="{$HX}" y2="{$HY}" fill="#666666" stroke="#666666" stroke-width="15" stroke-linecap="round">
		<animateTransform dur="43200s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="minute"  x1="{$PX}" y1="{$PY}" x2="{$MX}" y2="{$MY}" fill="#333333" stroke="#333333" stroke-width="5" stroke-linecap="round">
		<animateTransform dur="3600s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="second"  x1="{$PX}" y1="{$PY}" x2="{$SX}" y2="{$SY}" fill="#000000" stroke="#000000" stroke-width="2" stroke-linecap="round"> 
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	
	<circle id="point" cx="{$PX}" cy="{$PY}" r="10" fill="#000000" stroke="#000000" stroke-width="10"/>
	
	<text x="440,542,580,542,440,300,160,56,20" y="56,160,300,440,542,580,542,440,300" style="font-size:48px;">123456789</text>  
	<text x="56" y="160" style="font-size:48px;">10</text>  
	<text x="160" y="56" style="font-size:48px;">11</text>  
	<text x="300" y="20" style="font-size:48px;">12</text>  
</svg>
SVG;
?> 
