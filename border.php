<?php
header('content-type: image/png'); 
$imagick = new Imagick(); 
$imagick->readImage('img/3095_wpm_lowres.png'); 
$imagick->rotateImage(new ImagickPixel('none'), 90); 

$clut = new Imagick();
$clut->newImage(1, 1, new ImagickPixel('pink'));

$imagick->clutImage($clut);
 
print $imagick->getImage();  
$imagick->clear(); 
$imagick->destroy();
?>