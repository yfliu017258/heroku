<?php
header( 'Content-type: image/svg+xml' );


header("Cache-Control: max-age=2");
$ds = strtotime("now")-strtotime("2020-02-06 16:00:00");
$H=($ds%43200)/3600;
$M=($ds%3600)/60;
$S=$ds%60;

$R = 290;

$bgdX = 600;
$bgdY = 600;

$PX = 300;
$PY = 300;

$HL = $PY - $R * 0.35;
$ML = $PY - $R * 0.6;
$SL = $PY - $R * 0.8;

$HD= $H * 30;
$MD= $M * 6;
$SD= $S * 6;

$HX= $PX + sin(deg2rad($HD)) * $R * 0.35 ;
$HY= $PY + sin(deg2rad($HD - 90)) * $R * 0.35 ;
$MX= $PX + sin(deg2rad($MD)) * $R * 0.6 ;
$MY= $PY + sin(deg2rad($MD - 90)) * $R * 0.6 ;
$SX= $PX + sin(deg2rad($SD)) * $R * 0.8 ;
$SY= $PY + sin(deg2rad($SD - 90)) * $R * 0.8 ;

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
	
	<defs>
		<radialGradient id="a2" cx="20%" cy="20%">
	    	<stop offset="5%" stop-color="#fff" />
	    	<stop offset="95%" stop-color="#bfe" />
		</radialGradient>
	</defs>
	
	<defs>
		<radialGradient id="a3" cx="20%" cy="20%">
	    	<stop offset="5%" stop-color="#cff" />
	    	<stop offset="95%" stop-color="#6ff" />
		</radialGradient>
	</defs>
	
	<circle id="panel" cx="{$PX}" cy="{$PY}" r="{$R}" fill="url(#a1)" stroke="url(#a3)" stroke-width="10"/>
	
	<text x="430" y="75" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">I</text>  
	<text x="525" y="170" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">II</text>  
	<text x="560" y="300" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">III</text>  
	<text x="525" y="430" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">IV</text>  
	<text x="430" y="525" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">V</text>  
	<text x="300" y="560" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">VI</text>  
	<text x="170" y="525" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">VII</text>  
	<text x="85" y="430" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">VIII</text>  
	<text x="40" y="300" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">IX</text>  
	<text x="75" y="170" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">X</text>  
	<text x="170" y="75" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">XI</text>  
	<text x="300" y="40" text-anchor="middle" alignment-baseline="central" style="font-size:50px;" fill="url(#a2)">XII</text>  


	<line id="hour"  x1="{$PX}" y1="{$PY}" x2="{$HX}" y2="{$HY}" stroke="#6ff" stroke-width="15" stroke-linecap="round" stroke-opacity="0.5">
		<animateTransform dur="43200s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="minute"  x1="{$PX}" y1="{$PY}" x2="{$MX}" y2="{$MY}" stroke="#6ff" stroke-width="7.5" stroke-linecap="round" stroke-opacity="0.75">
		<animateTransform dur="3600s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	<line id="second"  x1="{$PX}" y1="{$PY}" x2="{$SX}" y2="{$SY}" stroke="#6ff" stroke-width="2.5" stroke-linecap="round"> 
		<animateTransform dur="60s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,{$PX},{$PY}" to="360,{$PX},{$PY}"/>
	</line>
	
	<circle id="point" cx="{$PX}" cy="{$PY}" r="10" fill="#050520" stroke="url(#a3)" stroke-width="5"/>
</svg>
SVG;
?> 
