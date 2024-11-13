<?php

// Check if the 'lang' parameter is set in the URL and store its value in $lang
$lang = $_GET['lang'] ?? '';

switch ($lang) {
    case 'en':
        echo '<h2 class="title">Partnership designed for certainty in life</h2>';
        echo '<p class="detail">Answer a few questions to get the estimated coverage you need.</p>';
        echo '<a href="complaints-and-grievances" class="grad-button">Contact US</a>';
        break;
    case 'ur':
        echo '<h2 class="title">اعلیٰ معیار کی پہچان</h2>';
        echo '<p class="detail">مطلوبہ تخمینہ شدہ کوریج حاصل کرنے کے لیے چند سوالات کے جواب دیں۔</p>';
        echo '<a href="complaints-and-grievances" class="grad-button">Contact US</a>';
        break;
    default:
        // Default content if 'lang' parameter is not set or doesn't match 'en' or 'ur'
        echo '<h2 class="title">Partnership designed for certainty in life</h2>';
        echo '<p class="detail">Answer a few questions to get the estimated coverage you need.</p>';
        echo '<a href="complaints-and-grievances" class="grad-button">Contact US</a>';
        break;
}



