<?php
 class Categorie{

	private $IdCategorie;
	private $NomCategorie;

	public function __construct ($id,$nom){
		$this->IdCategorie=$id;
		$this->NomCategorie=$nom;
	}

	public function getId(){
		return $this->IdCategorie;
	}

	public function getNom(){
		return $this->NomCategorie;
	}

	public function setId($id){
		$this->IdCategorie=$id;
	}

	public function setNom($nom){
		$this->NomCategorie=$$nom;
	}
}