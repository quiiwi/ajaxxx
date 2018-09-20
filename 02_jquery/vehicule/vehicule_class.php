<?php

class Vehicule
{
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    private $km;

    public function setMarque($argument){
        if(is_string($argument) && strlen($argument) >= 3 && strlen($argument) <= 30){
            $this -> marque = $argument;
            return $this;
        }
    }

    public function getMarque(){
        return $this -> marque;
    }

    //-------------

    public function setMarque($argument){
        if(is_string($argument) && strlen($argument) >= 3 && strlen($argument) <= 30){
            $this -> modele = $argument;
            return $this;
        }
    }

    public function getMarque(){
        return $this -> modele;
    }

    //-----------------

    public function setAnnee($argument){
        if(is_int($argument) && strlen)
    }
}