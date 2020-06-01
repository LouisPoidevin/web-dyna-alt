<?php
namespace controllers;
 use Ubiquity\orm\DAO;
 use models\Organization;
 
 /**
 * Controller Organizations
 * @route("organizations")
 **/
class Organizations extends \Ubiquity\controllers\ControllerBase{
 
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
            $orga=DAO::getById(Organization::class, $idOrga, ['users','groupes']);
            $this->loadView("Organizations/display.html",["orga"=>$orga]);
        }
}