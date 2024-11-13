<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database class
require_once 'Database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    exit('Method Not Allowed');
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if agent_code and security_code are set
    if (isset($_POST['agent_code']) && isset($_POST['security_code'])) {
        $agentCode = $_POST['agent_code'];
        $securityCode = $_POST['security_code'];

        // check captcha code here
        // if ($_POST['security_code'] != $_SESSION['captcha']) {
        //     $_SESSION['captcha_error'] = json_encode(['error' => 'Incorrect captcha code.']);
        //     exit;
        // }

        // Create a new Database instance
        $db = new Database();

        // Insert data into the database
        $result = $db->insertData($agentCode, $securityCode);
        // print($result);

        if ($result) {
            // Parse the JSON response
            $agentInfo = json_decode($result, true);

            $response = [
                'agentInfo' => $agentInfo
            ];

            echo json_encode($response);
        } else {
            echo json_encode(['error' => 'Error inserting data.']);
        }
    } else {
        echo json_encode(['error' => 'Agent code and security code are required.']);
    }
}


