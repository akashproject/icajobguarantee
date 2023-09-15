<?php
// Replace with your Google API key
$api_key = 'AIzaSyCb5YnE_EKuqYOAT0G_bQHyTKlyaNQcQL8';

// Place ID of the location you want to fetch reviews for
$place_id = 'ChIJq2OlB714AjoRY7Xg9QczfsU';

// API endpoint for fetching place details
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&fields=name,rating,reviews&key=$api_key";

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get JSON response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);
print_r($data);

if ($data && isset($data['result']['reviews'])) {
    $reviews = $data['result']['reviews'];

    // Loop through reviews and display them
    foreach ($reviews as $review) {
        echo 'Rating: ' . $review['rating'] . '<br>';
        echo 'Author: ' . $review['author_name'] . '<br>';
        echo 'Review: ' . $review['text'] . '<br>';
        echo '<hr>';
    }
} else {
    echo 'No reviews found.';
}
?>