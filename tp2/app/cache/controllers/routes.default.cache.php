<?php
return array("/_default/"=>array("get"=>array("controller"=>"controllers\\MainController","action"=>"index","parameters"=>array(),"name"=>"Home","cache"=>false,"duration"=>false)),"/partner/(.+?)/"=>array("get"=>array("controller"=>"controllers\\MainController","action"=>"partnerDetails","parameters"=>array(0),"name"=>"MainController-partnerDetails","cache"=>false,"duration"=>false)),"/sendMessage/"=>array("post"=>array("controller"=>"controllers\\MainController","action"=>"sendMessage","parameters"=>array(),"name"=>"MainController-sendMessage","cache"=>false,"duration"=>false)),"/contact/"=>array("get"=>array("controller"=>"controllers\\MainController","action"=>"contactForm","parameters"=>array(),"name"=>"Contact","cache"=>false,"duration"=>false)),"/MainController/partners/"=>array("get"=>array("controller"=>"controllers\\MainController","action"=>"partnersList","parameters"=>array(),"name"=>"Partners","cache"=>false,"duration"=>false)));
