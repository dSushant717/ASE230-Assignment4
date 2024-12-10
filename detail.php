<?php
include 'functions.php';

// Reading blog posts and visitor data
$blogPosts = readBlogPosts('posts.json');
$visitorsFile = 'visitors.csv';

// Getting the post ID from the URL
$postId = isset($_GET['post_id']) ? (int)$_GET['post_id'] : null;

if ($postId !== null && isset($blogPosts[$postId])) {
    updateVisitorCount($visitorsFile, $postId); // Updating the visitor count
    $visitors = readVisitors($visitorsFile); // Reading updated visitor counts
    $post = $blogPosts[$postId];
} else {
    $post = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if ($post): ?>
            <div class="card">
                <div class="card-body">
                    <h1 class="text-info"><?php echo $post['title']; ?></h1>
                    <p class="text-light">By <?php echo $post['author']; ?> on <?php echo $post['date']; ?></p>
                    <p class="mt-4"><?php echo $post['content']; ?></p>
                    <p class="mt-3 text-light">Views: <?php echo $visitors[$postId]; ?></p>
                </div>
            </div>
        <?php else: ?>
            <p class="text-danger">Post not found. Please go back and select a valid post.</p>
        <?php endif; ?>
        <a href="index.php" class="btn btn-outline-light mt-3">Back to Blog</a>
    </div>
</body>
</html>
