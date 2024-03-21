<?php
$comments = array(
    array(
        'name' => $name,
        'comment' => $comment,
        'csillag' => $csillag
    ),
);

foreach ($comments as $comment) {
    echo '<div class="bg-white">';
    echo '<div class="flex-row d-flex">';
    echo '<img src="dp.jpg" width="40" class="rounded-circle">';
    echo '<div class="d-flex flex-column justify-content-start ml-2">';
    echo '<span class="d-block font-weight-bold name">' . $comment['name'] . '</span>';
    echo '<span class="date text-black-50">' . $comment['comment'] . '</span>';
    echo '</div>';
    echo '</div>';
    echo '<div class="mt-3">';
    echo '<p class="comment-text">' . $comment['csillag'] . '</p>';
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