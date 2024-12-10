<?php
// Read blog posts from the JSON file
function readBlogPosts($filePath) {
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        return json_decode($jsonData, true);
    }
    return [];
}

// Read visitor data from the CSV file
function readVisitors($filePath) {
    $visitors = [];
    if (file_exists($filePath)) {
        $file = fopen($filePath, "r");
        while (($data = fgetcsv($file)) !== false) {
            $visitors[$data[0]] = $data[1];
        }
        fclose($file);
    }
    return $visitors;
}

// Update visitor count in the CSV file
function updateVisitorCount($filePath, $postId) {
    $visitors = readVisitors($filePath);
    if (isset($visitors[$postId])) {
        $visitors[$postId]++;
    } else {
        $visitors[$postId] = 1;
    }
    $file = fopen($filePath, "w");
    foreach ($visitors as $id => $views) {
        fputcsv($file, [$id, $views]);
    }
    fclose($file);
}
?>
