<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Your authentication logic goes here
    // For simplicity, using dummy username and password
    $dummyUsername = 'user@example.com';
    $dummyPassword = 'password123';

    if ($email === $dummyUsername && $password === $dummyPassword) {
        $response = array('status' => 'success', 'message' => 'Login successful');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid credentials');
        echo json_encode($response);
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>
