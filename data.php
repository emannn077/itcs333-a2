<?php
// API URL
$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// Fetch data from API
try {
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    if (!$data) {
        throw new Exception("Failed to parse JSON data");
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>