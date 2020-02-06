<?php
header( 'Content-type: image/svg+xml' );


header("Cache-Control: max-age=2");
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

$HX=sin(deg2rad($H*30))*$R*0.5+$PX;
$MX=sin(deg2rad($M*6))*$R*0.7+$PX;
$SX=sin(deg2rad($S*6))*$R*0.85+$PX;
$HY=sin(deg2rad($H*30-90))*$R*0.5+$PY;
$MY=sin(deg2rad($M*6-90))*$R*0.7+$PY;
$SY=sin(deg2rad($S*6-90))*$R*0.85+$PY;

<defs>
  <radialGradient id="r1" cx=".3" cy=".3" r=".7">
    <stop offset="0%" stop-color="#fff"></stop>
    <stop offset="30%" stop-color="#9f9"></stop>
    <stop offset="70%" stop-color="#373"></stop>
    <stop offset="100%" stop-color="#000"></stop>
  </linearGradient>
</defs>


echo <<<SVG
<?xml version="1.0" standalone="no"?>	
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
	"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> 
<svg width="{$bgdX}" height="{$bgdY}" version="1.1"
	 xmlns="http://www.w3.org/2000/svg"> 
	
	<defs>
		<radialGradient id="a1" cx="20%" cy="20%">
	    	<stop offset="5%" stop-color="#fff" />
	    	<stop offset="95%" stop-color="#888" />
		</radialGradient>
	</defs>
	
	<circle id="panel" cx="{$PX}" cy="{$PY}" r="{$R}" fill="url(#a1)" stroke="#BBFFEE" stroke-width="10"/>
	
	<line id="hour"  x1="{$PX}" y1="{$PY}" x2="{$HX}" y2="{$HY}" fill="#666666" stroke="#666666" stroke-width="20" stroke-linecap="round">
		<animateTransform dur="43200s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="minute"  x1="{$PX}" y1="{$PY}" x2="{$MX}" y2="{$MY}" fill="#333333" stroke="#333333" stroke-width="7" stroke-linecap="round">
		<animateTransform dur="3600s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="second"  x1="{$PX}" y1="{$PY}" x2="{$SX}" y2="{$SY}" fill="#000000" stroke="#000000" stroke-width="2" stroke-linecap="round"> 
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	
	<circle id="point" cx="{$PX}" cy="{$PY}" r="10" fill="#000000" stroke="#000000" stroke-width="10"/>
	
	<text x="430,525,560,525,430,300,170,75,40" y="75,170,300,430,525,560,525,430,300" text-anchor="middle" alignment-baseline="central" style="font-size:55px;">123456789</text>  
	<text x="75" y="170" text-anchor="middle" alignment-baseline="central" style="font-size:55px;">10</text>  
	<text x="170" y="75" text-anchor="middle" alignment-baseline="central" style="font-size:55px;">11</text>  
	<text x="300" y="40" text-anchor="middle" alignment-baseline="central" style="font-size:55px;">12</text>  
</svg>
SVG;
?> 
