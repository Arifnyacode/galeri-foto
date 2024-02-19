<?php
$photoDir = 'image/';
$photos = scandir($photoDir);

foreach ($photos as $photo) {
    if (in_array($photo, array('.', '..'))) {
        continue;
    }
    
    echo '<img src="' . $photoDir . $photo . '" alt="Foto">';
}
?>