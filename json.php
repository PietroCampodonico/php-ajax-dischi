<?php
include "music_albums.php";

header("Content-type: application/json");

echo json_encode($music_albums);
