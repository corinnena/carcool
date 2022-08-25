<?php
namespace App\Models;

use app\Models\Model;

class Ville extends Model{
    protected $nom;
    protected $codePostal;
    protected $distanceSiege;

    public function __construct($nom, $codePostal, $distanceSiege)
    {
        $this->nom=$nom;
        $this->codePostal=$codePostal;
        $this->distanceSiege=$distanceSiege;
    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of codePostal
     */ 
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     *
     * @return  self
     */ 
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get the value of distanceSiege
     */ 
    public function getDistanceSiege()
    {
        return $this->distanceSiege;
    }

    /**
     * Set the value of distanceSiege
     *
     * @return  self
     */ 
    public function setDistanceSiege($distanceSiege)
    {
        $this->distanceSiege = $distanceSiege;

        return $this;
    }
}



    