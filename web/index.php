<?php
header(“Content-type: image/png”);
$im = @imagecreatetruecolor(50, 100)
or die(“Cannot Initialize new GD image stream”);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5, “A Simple Text String”, $text_color);
imagepng($im);
imagedestroy($im);
?>