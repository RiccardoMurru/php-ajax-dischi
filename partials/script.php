<?php // include database
include __DIR__ . '/database.php';

header ('Content-Type: application/json');
echo json_encode($albums);
?>