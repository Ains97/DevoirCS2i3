<?php
 class Service{
    private $Idsevice;
    private $NomService;
    private $DescriptionService;
    private $prix;
    private $Categorie;
    private $User;
    
//constructeur si on ne le met pas l'on aurait un constructeur par defaut qui est le  constructeur vide
    public function __construct($id,$nom,$description,$prix,$categorie,$user){
        $this->Idservivce=$id;
        $this->NomService=$nom;
        $this->DescriptionService=$description;
        $this->prix=$prix;
        $this->Categorie=$categorie;
        $this->User=$user;
        
    }
    
    public function getId(){
        return $this->Idservice;
    }
     public function setId($id){
         $this->Idservice=$id;
    }

    public function getNom(){
        return $this->NomService;
    }
   
    public function setNom($nom){
        $this->NomService=$nom;
   }
   
   public function getDescription(){
        return $this->DescriptionService;
    }
    public function setdescription($description){
         $this->DescriptionService=$description;
    }

    public function getPrix(){
        return $this->prix;
    }

     public function getCategorie(){
        return $this->Categorie;
    }
    public function getUser(){
         return $this->User;
   }



}


