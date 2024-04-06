<?php
// AIzaSyBsrZ5JJoWl1zQW7EfQXgtpQNm0Y1pDZSQ
// Set your API key here
$apiKey = 'ChIJFSaaWrt3AjoRa12pGWqj7ug';

// Place ID of the location you want to fetch reviews for
$placeId = '14798347336818507484';

// URL for the Google Places API
$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$placeId&key=$apiKey";

// Fetch data from the API
$response = file_get_contents($url);

// Decode JSON response
$data = json_decode($response, true);

// Check if the request was successful
if ($data['status'] == 'OK') {
    // Extract reviews from the response
    $reviews = $data['result']['reviews'];

    // Output the reviews
    foreach ($reviews as $review) {
        $authorName = $review['author_name'];
        $rating = $review['rating'];
        $text = $review['text'];
        echo "Author: $authorName\n";
        echo "Rating: $rating\n";
        echo "Review: $text\n\n";
    }
} else {
    // Request was not successful
    echo "Error fetching reviews: " . $data['status'] . "\n";
}

?>