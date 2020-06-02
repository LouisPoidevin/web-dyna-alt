<?php
namespace controllers;
 use Ubiquity\orm\DAO;
 use models\Organization;
 
 /**
 * Controller Organizations
 * @route("organizations")
 **/
class Organizations extends \Ubiquity\controllers\ControllerBase{

    protected function users($users=null){
        $title="Tous les utilisateurs";
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
     * @get("{idOrga}","name"=>"orgas-display")
     **/    
    public function display($idOrga){
        $orga=DAO::getById(Organization::class, $idOrga,['users','groupes']);
        $users=$this->users($orga->getUsers());
        $this->loadView("Organizations/display.html",["orga"=>$orga,"users"=>$users]);
    }

}