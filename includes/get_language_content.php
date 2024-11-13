<?php

// Check if the 'lang' parameter is set in the URL and store its value in $lang
$lang = isset($_GET['lang']) ? $_GET['lang'] : '';

// Display content based on the value of $lang
if ($lang == 'en') {
    echo '<div class="title mb-3 fw-bold">Fill this feedback. It’s easy.</div>';
} elseif ($lang == 'ur') {
    echo '<div class="title mb-3 fw-bold">عسکری زندگی</div>';
} else {
    // Default content if 'lang' parameter is not set or doesn't match 'en' or 'ur'
    echo '<div class="title mb-3 fw-bold">Fill this feedback. It’s easy.</div>';
}
