<?php
namespace controllers;


use Ubiquity\utils\http\URequest;
use ws\controllers\AbstractWsController;
 
/**
 * Controller MainController
 */
class MainController extends AbstractWsController{

    /**
	 *
	 * @get("_default","name"=>"Home")
	 */
	public function index() {

	    $menu=$this->getMenu('Home');
	    $messages=$this->dataProvider->getMessages();
		$content=nl2br($this->dataProvider->getPageContent('Home'));
		$this->loadView('MainController/index.html',compact('messages','content') + $menu);

	}
	
	/**
	 *@route("news","name"=>"News")
	**/
	public function news() {

	    $menu=$this->getMenu('News');
		$content=nl2br($this->dataProvider->getPageContent('News'));
		$this->loadView('MainController/news.html',compact('content') + $menu);

	}

	/**
	 *@route("partner/{name}","methods"=>["get"])
	**/
	public function partnerDetails($name){
		
		$menu=$this->getMenu('');
		$partner=$this->dataProvider->getPartner($name);
		if (isset($name)){
			$this->loadView('MainController/partnerDetails.html',['name'=>$name] + compact('partner') + $menu);
		} else {
			$this->notFound($route);
		}

	}


	/**
	 *@route("sendMessage","methods"=>["post"])
	**/
	public function sendMessage(){
		
		$form=URequest::getDatas();
		$this->loadView('MainController/sendMessage.html', compact('form'));
	}


	/**
	 *@route("contact","methods"=>["get"], "name"=>"Contact")
	**/
	public function contactForm(){
		
		$menu=$this->getMenu('Contact');
		$this->loadView('MainController/contactForm.html', $menu);

	}


	/**
	 *@route("partners","methods"=>["get"], "name"=>"Partners")
	**/
	public function partnersList(){
		
		$menu=$this->getMenu('Partners');
		$partnerslist=$this->dataProvider->getPartners();
		$this->loadView('MainController/partnersList.html',compact('partnerslist') + $menu);

	}

}
