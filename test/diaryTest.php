<?php

include "../Model/diary.php";

$title = "test title";
$content = "test content";

$diary = new Diary('1', $title, $content);

if ($diary->getTitle() != $title) {
    echo "getTitle() error";
}

if ($diary->getContent() != $content) {
    echo "getContent() error";
}

$newTitle = "new title";
$newContent = "new content";

$diary->setContent($newContent);
$diary->setTitle($newTitle);

if ($diary->getTitle() != $newTitle) {
    echo "setTitle() error";
}

if ($diary->getContent() != $newContent) {
    echo "setContent() error";
}

echo $diary->printDiary();