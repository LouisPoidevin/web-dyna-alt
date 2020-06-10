<?php
namespace models;
/**
 * @table('rassemblement')
*/
class Rassemblement{
	/**
	 * @id
	 * @column("name"=>"id","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $id;

	/**
	 * @column("name"=>"nom","nullable"=>false,"dbType"=>"varchar(250)")
	 * @validator("length","constraints"=>array("max"=>250,"notNull"=>true))
	**/
	private $nom;

	/**
	 * @column("name"=>"lieu","nullable"=>false,"dbType"=>"text")
	 * @validator("notNull")
	**/
	private $lieu;

	/**
	 * @column("name"=>"dateHeure","nullable"=>false,"dbType"=>"timestamp")
	 * @validator("notNull")
	**/
	private $dateHeure;

	/**
	 * @column("name"=>"actif","nullable"=>false,"dbType"=>"tinyint(1)")
	 * @validator("isBool","constraints"=>array("notNull"=>true))
	**/
	private $actif;

	/**
	 * @oneToMany("mappedBy"=>"rassemblement","className"=>"models\\Inscription")
	**/
	private $inscriptions;

	 public function getId(){
		return $this->id;
	}

	 public function setId($id){
		$this->id=$id;
	}

	 public function getNom(){
		return $this->nom;
	}

	 public function setNom($nom){
		$this->nom=$nom;
	}

	 public function getLieu(){
		return $this->lieu;
	}

	 public function setLieu($lieu){
		$this->lieu=$lieu;
	}

	 public function getDateHeure(){
		return $this->dateHeure;
	}

	 public function setDateHeure($dateHeure){
		$this->dateHeure=$dateHeure;
	}

	 public function getActif(){
		return $this->actif;
	}

	 public function setActif($actif){
		$this->actif=$actif;
	}

	 public function getInscriptions(){
		return $this->inscriptions;
	}

	 public function setInscriptions($inscriptions){
		$this->inscriptions=$inscriptions;
	}

	 public function __toString(){
		return ($this->actif??'no value').'';
	}

}