<?php
namespace models;
/**
 * @table('inscription')
*/
class Inscription{
	/**
	 * @id
	 * @column("name"=>"id","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $id;

	/**
	 * @column("name"=>"nom","nullable"=>false,"dbType"=>"varchar(50)")
	 * @validator("length","constraints"=>array("max"=>50,"notNull"=>true))
	**/
	private $nom;

	/**
	 * @column("name"=>"email","nullable"=>false,"dbType"=>"varchar(100)")
	 * @validator("email","constraints"=>array("notNull"=>true))
	 * @validator("length","constraints"=>array("max"=>100))
	**/
	private $email;

	/**
	 * @column("name"=>"dateHeure","nullable"=>false,"dbType"=>"timestamp")
	 * @validator("notNull")
	**/
	private $dateHeure;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Rassemblement","name"=>"idRassemblement","nullable"=>false)
	**/
	private $rassemblement;

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

	 public function getEmail(){
		return $this->email;
	}

	 public function setEmail($email){
		$this->email=$email;
	}

	 public function getDateHeure(){
		return $this->dateHeure;
	}

	 public function setDateHeure($dateHeure){
		$this->dateHeure=$dateHeure;
	}

	 public function getRassemblement(){
		return $this->rassemblement;
	}

	 public function setRassemblement($rassemblement){
		$this->rassemblement=$rassemblement;
	}

	 public function __toString(){
		return ($this->dateHeure??'no value').'';
	}

}