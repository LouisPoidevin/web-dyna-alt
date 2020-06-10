<?php
namespace controllers;
use models\Groupe;
use Ubiquity\orm\DAO;
use models\Organization;
use Ubiquity\utils\http\URequest;

/**
* Controller Organizations
* @route("organizations")
**/
class Organizations extends ControllerBase{

    protected function users($idOrga,$idGroupe=null,$users=null){
        if(isset($idGroupe)){
            $group=DAO::getById(Groupe::class,$idGroupe,['users']);
            $title=$group->getName();
            $users=$group->getUsers();
        }else{
            $title="Tous les utilisateurs";
        }
        return $this->loadView("Organizations/users.html",compact("users","title"),true);
    }

    /**
     * @get("name"=>"orgas-index")
     **/
    public function index(){
        $organizations=DAO::getAll(Organization::class);
        $this->loadView("Organizations/index.html",["orgas"=>$organizations]);
    }

    /**
     * @get("{idOrga}/{idGroupe}","name"=>"orgas-display")
     **/
    public function display($idOrga,$idGroupe=null){
        if(URequest::isAjax()){
            echo $this->users($idOrga,$idGroupe);
        }else{
            $orga=DAO::getById(Organization::class, $idOrga,['users','groupes']);
            $users=$this->users($idOrga,$idGroupe,$orga->getUsers());
            $this->jquery->getHref("a", null, [
                'ajaxTransition' => 'random',
                'hasLoader' => 'internal'
            ]);
            $this->jquery->renderView("Organizations/display.html",["orga"=>$orga,"users"=>$users,"idGroupe"=>$idGroupe]);
        }
    }


/*
	public function notfound($route) {
	    $this->loadView("MainController/notfound.html", [
	        'route' => $route
	    ] + $this->getMenu(''));
    }
*/

    /**
	 *
	 * @get("{idOrga}/{idGroupe}","requirements"=>["route"=>"(?!admin|Admin).*?"],"priority"=>-1000)
	 */
    public function message($type,$header,$body,$icon="info"){
        $this->loadView("Organizations/message.html",["type"=>$type,"header"=>$header,"body"=>$body,"icon"=>$icon]);
    }

}