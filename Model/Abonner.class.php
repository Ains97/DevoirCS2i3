<?php

class Abonner{

	private $User;
	private $Service;
	private $DateAbn

	public function __construct ($user,$service,$dateAbn){
		$this->User=$user;
		$this->Service=$service;
		$this->DateAbn=$dateAbn
	}

	public function getUser(){
		return $this->User;
	}

	public function getService){
		return $this->Service;
	}

	public function getDateAbn(){
		return $this->DateAbn;
	}

	public function setDateAbn($dateAbn){
		$this->DateAbn=$dateAbn;
	}
	
	public function setService($service){
		$this->Service=$service;
	}
	public function setUser($user){
		$this->User=$User;
	}
	

}