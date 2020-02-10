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

$HX=sin(deg2rad($H*30))*$R*0.4+$PX;
$MX=sin(deg2rad($M*6))*$R*0.65+$PX;
$SX=sin(deg2rad($S*6))*$R*0.8+$PX;
$HY=sin(deg2rad($H*30-90))*$R*0.4+$PY;
$MY=sin(deg2rad($M*6-90))*$R*0.65+$PY;
$SY=sin(deg2rad($S*6-90))*$R*0.8+$PY;


echo <<<SVG
<?xml version="1.0" standalone="no"?>	
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
	"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> 
<svg width="{$bgdX}" height="{$bgdY}" version="1.1"
	 xmlns="http://www.w3.org/2000/svg"> 
	
	<defs>
		<radialGradient id="a1" cx="20%" cy="20%">
	    	<stop offset="5%" stop-color="#153570" />
	    	<stop offset="95%" stop-color="#050520" />
		</radialGradient>
	</defs>
	
	<circle id="panel" cx="{$PX}" cy="{$PY}" r="{$R}" fill="url(#a1)" stroke="#BBFFEE" stroke-width="10"/>
	
	<line id="hour"  x1="{$PX}" y1="{$PY}" x2="{$HX}" y2="{$HY}" fill="#66ffff" stroke="#66ffff" stroke-width="20" stroke-linecap="round">
		<animateTransform dur="43200s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="minute"  x1="{$PX}" y1="{$PY}" x2="{$MX}" y2="{$MY}" fill="#66ffff" stroke="#66ffff" stroke-width="7" stroke-linecap="round">
		<animateTransform dur="3600s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="second"  x1="{$PX}" y1="{$PY}" x2="{$SX}" y2="{$SY}" fill="#66ffff" stroke="#66ffff" stroke-width="2" stroke-linecap="round"> 
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	
	<circle id="point" cx="{$PX}" cy="{$PY}" r="10" fill="#BBFFEE" stroke="#BBFFEE" stroke-width="5"/>
	
	<text x="430" y="75" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">I</text>  
	<text x="525" y="170" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">II</text>  
	<text x="560" y="300" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">III</text>  
	<text x="525" y="430" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">IV</text>  
	<text x="430" y="525" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">V</text>  
	<text x="300" y="560" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">VI</text>  
	<text x="170" y="525" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">VII</text>  
	<text x="85" y="430" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">VIII</text>  
	<text x="40" y="300" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">IX</text>  
	<text x="75" y="170" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">X</text>  
	<text x="170" y="75" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">XI</text>  
	<text x="300" y="40" text-anchor="middle" alignment-baseline="central" style="font-size:55px;" fill="#eff">XII</text>  
</svg>
SVG;
?> 
