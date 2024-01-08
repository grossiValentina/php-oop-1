<?php

class Movie
{
    public $titolo;
    public $genere;
    public $minuti;
    public $info;

    function __construct($_titolo, $_genere, $_minuti, Info $_info)
    {
      $this->titolo = $_titolo;
      $this->genere = $_genere;
      $this->minuti = $_minuti;   
      $this->info = $_info;
    }
}






