<?php

function crawlSite($url, $depth = 5, $initialDomain) {
    static $seen = array(); // To avoid visiting the same URL multiple times

    if ($depth === 0 || isset($seen[$url])) {
        return;
    }

    // Mark the URL as seen
    $seen[$url] = true;

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and get the HTML content
    $html = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
        return;
    }

    // Close cURL session
    curl_close($ch);

    // Create a DOMDocument object
    $dom = new DOMDocument;

    // Load the HTML content into the DOMDocument
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    // Create a DOMXPath object
    $xpath = new DOMXPath($dom);

    // Get all anchor (a) tags with an href attribute
    $links = $xpath->query('//a[@href]');

    // Loop through each anchor tag and extract the href attribute
    foreach ($links as $link) {
        $href = $link->getAttribute('href');

        // Filter out empty and non-HTTP URLs
        if (!empty($href) && filter_var($href, FILTER_VALIDATE_URL)) {
            $parsedUrl = parse_url($href);

            // Check if the URL belongs to the same domain as the initial domain
            if ($parsedUrl && isset($parsedUrl['host']) && $parsedUrl['host'] === parse_url($initialDomain, PHP_URL_HOST)) {
                // Print or store the URL (you can modify this part to suit your needs)
                echo $href . PHP_EOL;
                echo "<br>";
                $str = file_get_contents($href);
                $wordCount = countWordsFromUrl($href);
                echo $wordCount;
                echo "<br>";

                // Recursively crawl the next URL
                crawlSite($href, $depth - 1, $initialDomain);
            }
        }
    }
}


function countWordsFromUrl($url) {
    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and get the HTML content
    $html = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
        return 0;
    }

    // Close cURL session
    curl_close($ch);

    // Remove HTML tags from the content
    $text = strip_tags($html);

    // Count the number of words
    $wordCount = str_word_count($text);

    return $wordCount;
}








// Example usage
$websiteUrl = 'https://toolske.com/';
crawlSite($websiteUrl, 5, $websiteUrl);

