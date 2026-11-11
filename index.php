
<?php

// Start session
session_start();

// Include controller
require_once __DIR__ . "/controllers/FacultyController.php";

// Escape output
function e($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8");
}

// Available routes
$routes = ["index", "create", "edit", "delete"];

// Get action
$action = $_GET["action"] ?? "index";

// Validate action
if (!in_array($action, $routes, true)) {
    $action = "index";
}

// Execute controller method
try {
    (new FacultyController())->$action();

} catch (PDOException $ex) {

    http_response_code(500);

    echo "<p>Database error. Did you import database.sql?</p>";
    echo "<pre>" . e($ex->getMessage()) . "</pre>";
}
