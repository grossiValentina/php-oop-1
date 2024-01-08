<?php

class Movie
{
    public $titolo;
    public $genere;
    public $minuti;

    function __construct($_titolo, $_genere, $_minuti)
    {
      $this->titolo = $_titolo;
      $this->genere = $_genere;
      $this->minuti = $_minuti;   
    }
}






