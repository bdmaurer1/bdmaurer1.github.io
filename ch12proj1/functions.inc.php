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

function outputPostRow($postId) {
    global $posts;
    $post = $posts[$postId];

    echo "<div class='row'>";

    echo "<div class='col-md-4'>";
    echo "<a href='post.php?id={$post['id']}' class=''><img src='images/{$post['thumb']}' alt='{$post['title']}' class='img-responsive'/></a>";
    echo "</div>";

    echo "<div class='col-md-8'>";
    echo "<h2>{$post['title']}</h2>";
    echo "<div class='details'>";
    echo "Posted by <a href='user.php?id={$post['user_id']}'>{$post['user_name']}</a>";
    echo "<span class='pull-right'>{$post['date']}</span>";
    echo "<p class='ratings'>" . outputStars($post['rating']) . " {$post['reviews']} Reviews</p>";
    echo "</div>";
    echo "<p class='excerpt'>{$post['excerpt']}</p>";
    echo "<p class='pull-right'><a href='post.php?id={$post['id']}' class='btn btn-primary btn-sm'>Read more</a></p>";
    echo "</div>";

    echo "</div>";
    echo "<hr/>";
}
