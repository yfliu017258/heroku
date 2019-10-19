<?php
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
    echo $str;
?>'