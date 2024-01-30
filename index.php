<?php

class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;

    public function __construct($title, $genre, $year, $director) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director;
    }

    public function getDescription() {
        return "{$this->title} è un film di genere {$this->genre} uscito nel {$this->year} e diretto da {$this->director}.";
    }
}

?>