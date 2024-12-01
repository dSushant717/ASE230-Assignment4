<?php
// Include the blog posts array from the index page
include 'index.php';

// Function to display the details of a blog post
function displayBlogPost($posts, $id) {
    if (isset($posts[$id])) {
        $post = $posts[$id];
        echo "<h1 class='mb-3'>{$post['title']}</h1>";
        echo "<p><strong>Author:</strong> {$post['author']}</p>";
        echo "<p><strong>Date:</strong> {$post['date']}</p>";
        echo "<div class='mt-4'>{$post['content']}</div>";
    } else {
        echo "<p class='text-danger'>Post not found. Please go back and select a valid post.</p>";
    }
}

// Get the post ID from the URL
$postId = isset($_GET['post_id']) ? (int)$_GET['post_id'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <?php
        if ($postId !== null) {
            displayBlogPost($blogPosts, $postId);
        } else {
            echo "<p class='text-danger'>No post selected. Please go back to the blog index.</p>";
        }
        ?>
        <a href="index.php" class="btn btn-primary mt-3">Back to Blog</a>
    </div>
</body>
</html>
