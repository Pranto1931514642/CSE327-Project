<?php
// Define your base URL for the project
define('BASE_URL', 'http://localhost/your_project_name/');

// Autoload classes: Include necessary controller and model files automatically
spl_autoload_register(function ($class) {
    include 'controllers/' . $class . '.php'; // Include controller classes from the controllers folder
    include 'models/' . $class . '.php'; // Include model classes from the models folder
});

// Parse the URL to get the controller and action
$url = isset($_GET['url']) ? $_GET['url'] : 'delete'; // Get the URL parameter, default to 'delete' controller if not provided
$url = rtrim($url, '/'); // Remove trailing slashes from the URL
$urlParts = explode('/', $url); // Split the URL into parts based on '/'

// Determine the controller and action from the URL
$controllerName = ucfirst($urlParts[0]) . 'Controller'; // Capitalize the first letter of the controller name and append 'Controller'
$action = isset($urlParts[1]) ? $urlParts[1] : 'index'; // Get the action name from the URL, default to 'index' if not provided

// Instantiate the controller and call the action method
if (class_exists($controllerName)) {
    $controller = new $controllerName(); // Create an instance of the specified controller
    if (method_exists($controller, $action)) {
        $controller->{$action}(); // Call the specified action method on the controller object
    } else {
        // Handle invalid action
        echo "Invalid action";
    }
} else {
    // Handle invalid controller
    echo "Invalid controller";
}
?>
