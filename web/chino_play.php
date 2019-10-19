<?php
header("Content-type: image/gif");
$k= rand(0,9);

$links = array();
if($k<"9")
{
    $links[] = '0';
    $links[] = '2';
    $links[] = '5';
}
else
{
    $links[] = '3';
}

shuffle($links);
$link    = $links[(rand(0, (count($links) - 1)))];
header("Location: https://cies96035.000webhostapp.com/zyro/chino_plays_img/{$link}.gif");

?>