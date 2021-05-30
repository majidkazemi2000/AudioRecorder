<?php
$path = 'audio/';
$location = $path . $_FILES['voice']['name'];
echo $location;
move_uploaded_file($_FILES['voice']['tmp_name'], $location);