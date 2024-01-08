<?php

class Info
{
    public $lingua;
    public $regista;

    function __construct($_lingua, $_regista)
    {
      $this->lingua = $_lingua;
      $this->regista = $_regista;
    }
}
