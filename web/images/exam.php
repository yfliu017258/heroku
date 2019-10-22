<?php
  header("Cache-Control: max-age=1");
  header("Content-type: image/png");
	
	$N=strtotime("now");
	$dir=strtotime("2020-01-17 01:15:00");
    $ds=$dir-$N;
    $D=intval($ds/86400);
    $H=intval(($ds%86400)/3600);
    $M=intval(($ds%3600)/60);
    $S=$ds%60;
    
    $str=
    str_pad($D,2,'0',STR_PAD_LEFT)."天".
    str_pad($H,2,'0',STR_PAD_LEFT)."時".
    str_pad($M,2,'0',STR_PAD_LEFT)."分".
    str_pad($S,2,'0',STR_PAD_LEFT)."秒";
    
    
	$font = dirname(__FILE__)."/font/Regular.ttf";
	$img = imagecreatetruecolor(350, 75);
    $white = imagecolorallocate($img, 220, 220, 220);
    $blue = imagecolorallocate($img, 51, 150, 255);
    $blue2 = imagecolorallocate($img, 0, 0, 136);
    $black = imagecolorallocate($img, 0, 0, 0);
    imagefill($img, 0, 0, $white);
    imagettftext($img, 20, 0, 5, 25, $blue2, $font, "距109學測還剩:");
    imagettftext($img, 30, 0, 5, 65, $blue, $font, $str);
    //size,,x,y
	imagepng($img);
	imagedestroy($img);
?>'
