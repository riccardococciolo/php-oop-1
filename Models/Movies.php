<?php

class movie {
    public $title;
    public $year;
    public $genres;

    public function __construct($_title, $_year, $_genres) {
        $this->title = $_title;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    public function printMovie() {
        echo "Title: {$this->title}, Year: {$this->year}, Genres: " . implode(", ", $this->genres);
    }
}