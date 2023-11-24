<?php
require 'Login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new Login('localhost', 'mydatabase', 'root', '');

    if ($login->authenticate($username, $password)) {
        echo "Login successful!";
        // Redirect or set session variable here
    } else {
        echo "Login failed!";
    }
}
