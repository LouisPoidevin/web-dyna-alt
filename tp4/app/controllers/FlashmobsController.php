<?php
namespace controllers;

use Ubiquity\orm\DAO;
use models\Rassemblement;
use Ubiquity\utils\http\UCookie;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\UResponse;

 /**
 * Controller FlashmobsController
 */
class FlashmobsController extends ControllerBase{

	public function index(){
		if(!UCookie::exists("flash-mob")){
			$message="Il s'agit de votre première visite, bienvenue !";
			UCookie::set('flash-mob',true);
		} elseif(UCookie::exists("flash-mob")) {
			$message="Merci de votre retour !";
		}
		$this->loadView('FlashmobsController/index.html',["message"=>$message]);
	}

	/**
	 * @get("flashmobs/create","name"=>"flashmobs.create")
	 */
	public function flashmobsForm(){
		
		$this->loadView('FlashmobsController/flashmobsForm.html');

	}

	/**
     * @post("flashmobs/create/do","name"=>"flashmobs.create.do")
     **/
    public function flashmobsCreate(){
		$form=URequest::getDatas();

		$event=new Rassemblement();
		$event->setNom($form['nom']);
		$event->setLieu($form['lieu']);
		$event->setDateHeure($form['date']);
		$event->setActif(true);
		if (DAO::insert($event)){
			UResponse::header("location","/flashmobs");
		} else {
			$this->loadView('FlashmobsController/erreur.html',["nom"=>$form['nom']]);
		}
	}

}
