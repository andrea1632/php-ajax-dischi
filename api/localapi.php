<?php 
include __DIR__ . './package.php';
header('Content-Type: application/json');
    echo json_encode($database);
?>