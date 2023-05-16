<?php

class Movie {

public $name;
public $genre;
public $release_year;

public function __construct(string $name, string $genre, int $release_year){
    $this->name = $name;
    $this->genre = $genre;
    $this->release_year = $release_year;
}

}
