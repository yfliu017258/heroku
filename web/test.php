<?php
header( 'Content-type: image/svg+xml' );
// circlegeom_svg.php?radius=1000&angle=5
 $R = 75;
 $A = 40;
$msg = 'Circle radius = '.$R.'; Lines inc angle = '.$A;
// view port (svg width, height)
$viewportX = 600;
$viewportY = 350;
// view box same as bounding box (bdgbox)
$A = deg2rad($A)/2;
$d = $R/sin($A);
$bdgboxX = $d+$R;
$bdgboxY = 2*$R;

<<<<<<< HEAD
$tangentpt1X = $d-$R*sin($A);
$tangentpt1Y = $R*(1-cos($A));
$tangentpt2X = $tangentpt1X;
$tangentpt2Y = $R*(1+cos($A));
// for pixel offsets, user units per pixel
if (($bdgboxX/$bdgboxY) >= ($viewportX/$viewportY)) {
 $uu_per_pix = $bdgboxX/$viewportX;
} else {
 $uu_per_pix = $bdgboxY/$viewportY;
}
$strokewidth1 = 1*$uu_per_pix;
$strokedash0 = 4*$uu_per_pix;
$strokedash1 = 8*$uu_per_pix;
$textht = 16*$uu_per_pix;
$textht1 = 12*$uu_per_pix;
$_d = round($d,3);
$text_dX = $d/2;
$text_dY = $R-3*$uu_per_pix;
$msg_Y = $bdgboxY-5*$uu_per_pix;


// PHP heredoc notation - start and end SVG could be replaced by any identifier;
// end identifier must not have leading space.



echo <<<SVG
<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
 "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

<svg width="{$viewportX}" height="{$viewportY}" version="1.1"
 viewBox="0,0,{$bdgboxX},{$bdgboxY}"
 preserveAspectRatio="xMidYMid meet"
 xmlns="http://www.w3.org/2000/svg">

<!-- line diagram -->

 <line y2="{$R}" fill="none" x1="0.0" x2="{$bdgboxX}" stroke="#000000"
 stroke-width="{$strokewidth1}"
 stroke-dasharray="{$strokedash1},{$strokedash0}" y1="{$R}"/>


 <ellipse rx="{$R}" fill="none" ry="{$R}" cx="{$d}" cy="{$R}"
 stroke="#0000FF" stroke-width="{$strokewidth1}"/>


 <line y2="{$tangentpt1Y}" fill="none" x1="0.0" x2="{$tangentpt1X}"
 stroke="#FF0000" y1="{$R}" stroke-width="{$strokewidth1}"/>
 <line y2="{$tangentpt2Y}" fill="none" x1="0.0" x2="{$tangentpt2X}"
 stroke="#FF0000" y1="{$R}" stroke-width="{$strokewidth1}"/>
 <line y2="{$tangentpt2Y}" fill="none" x1="{$d}" x2="{$d}"
 stroke="#000000" y1="{$tangentpt1Y}" stroke-width="{$strokewidth1}"
 stroke-dasharray="{$strokedash1},{$strokedash0}"/>
 <text x="{$text_dX}" y="{$text_dY}" font-family="Verdana"
 font-weight="bold" font-size="{$textht}">d = {$_d} units</text>
 <text x="0.0" y="{$msg_Y}" font-family="Verdana" font-weight="bold"
 font-size="{$textht1}">{$msg}</text>
</svg>
SVG;
?> 
=======

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


echo <<<SVG
<?xml version="1.0" standalone="no"?>	
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
	"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> 
<svg width="{$bgdX}" height="{$bgdY}" version="1.1"
	 xmlns="http://www.w3.org/2000/svg"> 
	 
	<circle id="panel" cx="{$PX}" cy="{$PY}" r="{$R}" fill="none" stroke="#000000" stroke-width="10"/>
	
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
	
	<text x="440,542,580,542,440,300,160,56,20" y="56,160,300,440,542,580,542,440,300" text-anchor="middle" style="font-size:48px;">123456789</text>  
	<text x="56" y="160" text-anchor="middle" style="font-size:48px;">10</text>  
	<text x="160" y="56" text-anchor="middle" style="font-size:48px;">11</text>  
	<text x="300" y="50" text-anchor="middle" style="font-size:48px;">12</text>  
</svg>
SVG;
?> 
>>>>>>> eff579746d959b0efd73fd3283e0899f887e1d23
