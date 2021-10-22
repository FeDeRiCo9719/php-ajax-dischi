<?php

// 1. RICHIAMO IL DATABASE
require __DIR__ . '/../database/data.php';
// var_dump($database);

// 2. CREO IL FORMATO JSON
header('Content-Type: application/json');
echo json_encode($database);