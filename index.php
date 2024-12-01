<?php
// Blog posts data array
$blogPosts = [
    [
        "title" => "Eiichiro Oda and the Legacy of One Piece",
        "content" => "Eiichiro Oda, the mastermind behind the globally acclaimed manga One Piece, has spent over two decades crafting a story that transcends genres. This blog dives into how Oda creates relatable characters, builds intricate worlds, and weaves themes of friendship, freedom, and adventure. From the Straw Hat crew's camaraderie to the mysteries of the Grand Line, Oda’s storytelling has made One Piece a cultural phenomenon that resonates with readers of all ages. We’ll explore what inspires Oda, his creative process, and how One Piece has changed the manga landscape forever.",
        "author" => "Eiichiro Oda",
        "date" => "2024-11-29"
    ],
    [
        "title" => "J.K. Rowling: The Magic Beyond Harry Potter",
        "content" => "J.K. Rowling’s Harry Potter series has captured the hearts of millions, but her journey as an author is just as magical. This blog post explores how Rowling went from struggling to make ends meet to creating one of the most beloved fictional universes of all time. Beyond the captivating spells and epic battles, Rowling’s work explores themes of love, sacrifice, and the fight against prejudice. Join us as we delve into her inspirations, the challenges she faced while writing, and the lasting impact of the Wizarding World on readers everywhere.",
        "author" => "J.K. Rowling",
        "date" => "2024-11-28"
    ],
    [
        "title" => "The Profound Themes of Attack on Titan",
        "content" => "Hajime Isayama’s Attack on Titan is far more than just a thrilling action-packed manga—it’s a deeply philosophical exploration of human nature, morality, and the pursuit of freedom. In this blog, we discuss how Isayama masterfully tackles complex questions like whether the ends justify the means and how fear shapes societies. With unforgettable characters and a plot that keeps fans guessing, Attack on Titan challenges readers to confront uncomfortable truths. We’ll also look at Isayama’s creative influences and the profound way his work has sparked global conversations about the human condition.",
        "author" => "Hajime Isayama",
        "date" => "2024-11-27"
    ]
];


// Function to display blog post titles
function displayBlogTitles($posts)
{
    foreach ($posts as $id => $post) {
        echo "<li class='list-group-item'><a href='detail.php?post_id=$id'>{$post['title']}</a></li>";
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
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Welcome to the Blog</h1>
        <ul class="list-group">
            <?php displayBlogTitles($blogPosts); ?>
        </ul>
    </div>
</body>

</html>