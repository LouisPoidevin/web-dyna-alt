<?php
namespace controllers;

use Ubiquity\utils\http\UCookie;

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

}
