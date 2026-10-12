<?php
$html = @file_get_contents('https://eshikshahub.in/');
if ($html) {
    preg_match_all('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $matches);
    echo "Found " . count($matches[1]) . " images on live site:\n";
    foreach ($matches[1] as $src) {
        echo "$src\n";
    }
} else {
    echo "Could not fetch https://eshikshahub.in/\n";
}
