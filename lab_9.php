<?php
header ("Content-type: image/png");
$img = imagecreatetruecolor(320, 240);
$text_color = imagecolorallocate($img, 233, 14, 91);
$text=(new DateTime("Today"))->diff(new DateTime(date('Y',strtotime('+1 year'))."-01-01"))->format('%R%a days to new year');
imagestring($img, 7, 10, 50,  $text, $text_color);
imagepng($img);
imagedestroy($img);
?>
