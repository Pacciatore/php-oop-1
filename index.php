<?php

class Movie
{
    public $title;
    public $year;
    public $genre;
    public $rating;

    private $imgPath;


    function __construct($_title, $_year, $_genre = '', $_rating = 0, $_imgPath = '')
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->rating = $_rating;

        $this->imgPath = $_imgPath;
    }


    public function imgPathSet($path)
    {
        $this->imgPath = $path;
    }
}

