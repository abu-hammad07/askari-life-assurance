<?php

// Check if the 'lang' parameter is set in the URL and store its value in $lang
$lang = $_GET['lang'] ?? '';

switch ($lang) {
    case 'en':
        echo '<h2 class="title" id="main-title">A Legacy of Excellence</h2>';
        echo '<p class="detail" id="main-detail">We provide reliable services to address all your financial needs of now and the future.</p>';
        break;
    case 'ur':
        echo '<h2 class="title" id="main-title">اعلیٰ معیار کی پہچان</h2>';
        echo '<p class="detail" id="main-detail">ہم آپ کے آج اور مستقبل کی تمام مالی ضروریات کا مداوا کرنے کے لئے قابل بھروسہ خدمات فراہم کرتے ہیں</p>';
        break;
    default:
        // Default content if 'lang' parameter is not set or doesn't match 'en' or 'ur'
        echo '<h2 class="title" id="main-title">A Legacy of Excellence</h2>';
        echo '<p class="detail" id="main-detail">We provide reliable services to address all your financial needs of now and the future.</p>';
        break;
}



