<?php
// Define the API endpoint URL
// Query filters for IT college and bachelor programs
$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// Attempt to fetch and process the API data
try {
    // Fetch raw data from the API
    $response = file_get_contents($url);
    
    // Decode JSON response into PHP array
    $data = json_decode($response, true);
    
    // Check if JSON decoding was successful
    if (!$data) {
        throw new Exception("Failed to parse JSON data");
    }
} catch (Exception $e) {
    // Handle any errors that occur during the process
    die("Error: " . $e->getMessage());
}
?>
