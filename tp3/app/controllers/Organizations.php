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
}