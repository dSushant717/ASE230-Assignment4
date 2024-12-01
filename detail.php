<?php
include 'index.php';

// Function to display blog details
function displayBlogPost($posts, $id) {
    if (isset($posts[$id])) {
        $post = $posts[$id];
        echo "
        <div class='card shadow-lg'>
            <div class='card-body'>
                <h1 class='text-info'>{$post['title']}</h1>
                <p class='text-light'>By {$post['author']} on {$post['date']}</p>
                <p class='mt-4'>{$post['content']}</p>
            </div>
        </div>
        ";
    } else {
        echo "<p class='text-danger'>Post not found. Please go back and select a valid post.</p>";
    }
}

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
    <style>
        body {
            background-color: #0b0c10;
            color: #c5c6c7;
        }
        .card {
            background-color: #1f2833;
            border: none;
        }
        .text-info {
            color: #45a29e !important;
        }
        .text-light {
            color: #c5c6c7 !important;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <?php
        if ($postId !== null) {
            displayBlogPost($blogPosts, $postId);
        } else {
            echo "<p class='text-danger'>No post selected. Please go back and select a valid post.</p>";
        }
        ?>
        <a href="index.php" class="btn btn-outline-light mt-3">Back to Blog</a>
    </div>
</body>
</html>
