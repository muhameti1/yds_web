<?php

// Sample data (replace with your database logic)
$todos = [
    ['id' => 1, 'task' => 'Buy groceries'],
    ['id' => 2, 'task' => 'Clean the house'],
    ['id' => 3, 'task' => 'Go for a run'],
];

// Allow cross-origin requests (CORS)
header('Access-Control-Allow-Origin: *'); // You can specify the origin or use a wildcard '*'
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

// Set the response content type as JSON
header('Content-Type: application/json');

// Return the to-do list as JSON
echo json_encode($todos);
