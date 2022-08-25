<?php
namespace App\Models;

use App\Models\Model;


class Trajet extends Model{
    protected $id;
    protected $nbMaxTransport;
    protected $frequence;
    protected $type;
    protected $date;
    protected $heure;
    protected $fumeur;

    public function __construct($id, $nbMaxTransport, $frequence, $type, $date, $heure, $fumeur){
        $this->id=$id;
        $this->nbMaxTransport=$nbMaxTransport;
        $this->frequence=$frequence;
        $this->type=$type;
        $this->date=$date;
        $this->heure=$heure;
        $this->fumeur=$fumeur;

    }

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nbMaxTransport
     */ 
    public function getNbMaxTransport()
    {
        return $this->nbMaxTransport;
    }

    /**
     * Set the value of nbMaxTransport
     *
     * @return  self
     */ 
    public function setNbMaxTransport($nbMaxTransport)
    {
        $this->nbMaxTransport = $nbMaxTransport;

        return $this;
    }

    /**
     * Get the value of frequence
     */ 
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Set the value of frequence
     *
     * @return  self
     */ 
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of heure
     */ 
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set the value of heure
     *
     * @return  self
     */ 
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get the value of fumeur
     */ 
    public function getFumeur()
    {
        return $this->fumeur;
    }

    /**
     * Set the value of fumeur
     *
     * @return  self
     */ 
    public function setFumeur($fumeur)
    {
        $this->fumeur = $fumeur;

        return $this;
    }
}
  
