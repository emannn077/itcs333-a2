<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT College Student Statistics</title>
    <!-- Include Pico CSS framework for styling -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
</head>
<body>
    <h1>College of IT - Student Enrollment Statistics</h1>
    <!-- Container with horizontal scroll for table overflow -->
    <div class="overflow-auto">
        <!-- Striped table for better readability -->
        <table class="striped">
            <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Semester</th>
                    <th scope="col">The programs</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Colleges</th>
                    <th scope="col">Number of Students</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if data exists and is in array format
                if (isset($data['results']) && is_array($data['results'])) {
                    // Loop through each row of data
                    foreach ($data['results'] as $row) {
                        echo "<tr>";
                        // Display data with HTML special characters escaped for security
                        echo "<td>" . htmlspecialchars($row['year']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['the_programs']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nationality']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['colleges']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['number_of_students']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    // Display message if no data is available
                    echo "<tr><td colspan='4'>No data available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
