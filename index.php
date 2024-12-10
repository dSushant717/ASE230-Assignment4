<?php
include 'functions.php';

// Reading blog posts from JSON
$blogPosts = readBlogPosts('posts.json');

// Function for displaying blog post titles
function displayBlogTitles($posts) {
    foreach ($posts as $id => $post) {
        echo "
        <div class='card mb-3'>
            <div class='card-body'>
                <h5 class='card-title text-info'>{$post['title']}</h5>
                <p class='card-text text-light'>By {$post['author']} on {$post['date']}</p>
                <a href='detail.php?post_id=$id' class='btn btn-outline-light'>Read More</a>
            </div>
        </div>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Index</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4 text-info">Welcome to the Blog</h1>
        <?php displayBlogTitles($blogPosts); ?>
    </div>
</body>
</html>
