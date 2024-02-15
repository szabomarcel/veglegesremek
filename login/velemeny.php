<?php
$statement = $pdo->prepare("SELECT `name`, `date`, `comment` FROM velemeny");
$statement->execute();
$comments = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($comments as $comment) {
    echo '<div class="bg-white">';
    echo '<div class="flex-row d-flex">';
    echo '<img src="dp.jpg" width="40" class="rounded-circle">';
    echo '<div class="d-flex flex-column justify-content-start ml-2">';
    echo '<h2 class="d-block font-weight-bold name">' . $comment['velemeny_id'] . '</h2>';
    echo '<span class="d-block font-weight-bold name">' . $comment['name'] . '</span>';
    echo '<span class="date text-black-50">' . $comment['date'] . '</span>';
    echo '</div>';
    echo '</div>';
    echo '<div class="mt-3">';
    echo '<p class="comment-text">' . $comment['comment'] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="bg-white">';
    echo '<div class="d-flex flex-row fs-14">';
    echo '<div class="p-2 cursor p-2"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>';
    echo '<div class="p-2 cursor p-2"><i class="fa fa-comment"></i><span class="ml-1">Reply</span></div>';
    echo '<div class="p-2 cursor p-2"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>';
    echo '</div>';
    echo '</div>';
}
?>