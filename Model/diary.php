<?php

class Diary
{
    private $title;
    private $content;

    public function getTitle()
    {
        return $title;
    }

    public function getContent()
    {
        return $content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function __construct($title = "", $content = "")
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function printDiary()
    {
        $str = "title: " . $this->getTitle() . ",";
        $str .= "content: " . $this->getContent() . "<br>";
        return $str;
    }
}