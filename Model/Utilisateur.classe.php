<?php
 class Utilisateur{
    private $Id;
    private $Nom;
    private $Prenom;
    private $MDP;
    private $Compte;
    private $Telephone;
    private $Email;



    public function __construct($id,$nom,$prenom,$MDP,$compte,$telephone,$email){
        $this->Id=$id;
        $this->Nom=$nom;
        $this->Prenom=$prenom;
        $this->MDP=$MDP;
        $this->Compte=$compte;
        $this->Telephone=$telephone;
        $this->Email=$email;
    }

    public function getId(){
        return $this->Id;
    }
     public function setId($id){
         $this->Idr=$id;
    }

    public function getNom(){
        return $this->Nom;
    }
   
    public function setNom($nom){
        $this->Nom=$nom;
   }

    public function getPrenom(){
        return $this->Prenom;
    }
    public function setPrenom($prenom){
        $this->Prenom=$prenom;
    }

     public function getMdp(){
        return $this->MDP;
    }

    public function getCompte(){
        return $this->Compte;
    }

    public function getTelephone(){
        return $this->Telephone;
    }

     public function getEmail(){
        return $this->Email;
    }

    }


    
    

   








