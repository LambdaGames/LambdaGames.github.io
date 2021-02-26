<?php

session_start();

if (isset($_POST['code'])) {
    if ($_POST['code'] == $_SESSION['code'])
    echo "captcha valide !";
    else
    echo "captcha invalide...";
}

$code = rand(1000,9999);
$_SESSION['code'] = $code;

$img = imagecreate(100,30);

$font = 'font/28DaysLater.ttf';

$bg = imagecolorallocate($img,255,0,0);
$textcolor = imagecolorallocate($img,0,0,0);

imagestring($img, $font, 5,5, $code, $textcolor);
imagettftext($img, 23, 0, 3, 30, $textcolor, $font, $_SESSION['code']);
imagejpeg($img);
imagedestroy($img);


?>
