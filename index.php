<?php

$open=true;

if (!function_exists('getallheaders')) {
    foreach ($_SERVER as $name => $value) {
        if (strtolower(substr($name, 0, 5)) == 'http_') {
            $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
        }
    }
    $request_headers = $headers;
} else {
    $request_headers = getallheaders();
}

if (isset($_GET['i'])) {
    header('Location: http://safetycasque.unaux.com/');
}

$del_cookie_options = array(
    'expires' => 1,
    'path' => '/',
    'domain' => 'safetycasque.unaux.com',
    'secure' => false,
    'httponly' => false,
    'samesite' => 'None'
);

header('Server: Apache');

if (isset($_COOKIE['dev']) || $open) {
include('nobots/main.php');
}
else {
    echo("<h1>Site en maintenance</h1>");
    echo("<p>Revenez plus tard !!!</p><p>L'équipe SafetyCasque</p>");
}