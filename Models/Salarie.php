<?php
namespace App\Models;


class Salarie extends Model{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mdp;
    protected $numeroAdresse;
    protected $voieAdresse;
    protected $email;
    protected $telephone;
    protected $salarie_id;

    
    public function __construct(){
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table =strtolower(str_replace('Model', '', $class));
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

   
    /**
     * Get the value of numeroAdresse
     */ 
    public function getNumeroAdresse()
    {
        return $this->numeroAdresse;
    }

    /**
     * Set the value of numeroAdresse
     *
     * @return  self
     */ 
    public function setNumeroAdresse($numeroAdresse)
    {
        $this->numeroAdresse = $numeroAdresse;

        return $this;
    }

    /**
     * Get the value of voieAdresse
     */ 
    public function getVoieAdresse()
    {
        return $this->voieAdresse;
    }

    /**
     * Set the value of voieAdresse
     *
     * @return  self
     */ 
    public function setVoieAdresse($voieAdresse)
    {
        $this->voieAdresse = $voieAdresse;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }


    /**
     * Get the value of salarie_id
     */ 
    public function getSalarie_id():int
    {
        return $this->salarie_id;
    }

    /**
     * Set the value of salarie_id
     *
     * @return  self
     */ 
    public function setSalarie_id(int $salarie_id)
    {
        $this->salarie_id = $salarie_id;

        return $this;
    }
}
