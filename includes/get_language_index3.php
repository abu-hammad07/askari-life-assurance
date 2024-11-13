<?php

// Function to display the text based on the selected language
function displayText($lang) {
    switch ($lang) {
        case 'en':
            return '<p>Bancassurance Plans</p>';
        case 'ur':
            return '<p>بینک انشورنس منصوبے</p>';
        default:
            // Default content if 'lang' parameter is not set or doesn't match 'en' or 'ur'
            return '<p>Bancassurance Plans</p>';
    }
}

// Check if the 'lang' parameter is set in the GET request
$lang = $_GET['lang'] ?? '';

// Call the function and echo the result
echo displayText($lang);

