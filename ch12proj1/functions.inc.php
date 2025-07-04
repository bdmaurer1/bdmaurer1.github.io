<?php

function generateLink($id, $url, $label) {
    return "<a href='$url?id=$id'>$label</a>";
}

function outputStars($rating) {
    $stars = '';
    for ($i = 0; $i < 5; $i++) {
        if ($i < $rating) {
            $stars .= "<img src='images/star-gold.svg' width='16' />";
        } else {
            $stars .= "<img src='images/star-white.svg' width='16' />";
        }
    }
    return $stars;
}

function outputPostRow($index) {
    global $posts;
    $post = $posts[$index];

    echo "<div class='row'>";

    echo "<div class='col-md-4'>";
    echo "<a href='post.php?id={$post['postId']}' class=''><img src='images/{$post['thumb']}' alt='{$post['title']}' class='img-responsive'/></a>";
    echo "</div>";

    echo "<div class='col-md-8'>";
    echo "<h2>{$post['title']}</h2>";
    echo "<div class='details'>";
    echo "Posted by <a href='user.php?id={$post['userId']}'>{$post['userName']}</a>";
    echo "<span class='pull-right'>{$post['date']}</span>";
    echo "<p class='ratings'>" . outputStars($post['reviewsRating']) . " {$post['reviewsNum']} Reviews</p>";
    echo "</div>";
    echo "<p class='excerpt'>{$post['excerpt']}</p>";
    echo "<p class='pull-right'><a href='post.php?id={$post['postId']}' class='btn btn-primary btn-sm'>Read more</a></p>";
    echo "</div>";

    echo "</div>";
    echo "<hr/>";
}

