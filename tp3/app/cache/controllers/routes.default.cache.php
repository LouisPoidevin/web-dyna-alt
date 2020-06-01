<?php
return array("/organizations/(index/)?"=>array("get"=>array("controller"=>"controllers\\Organizations","action"=>"index","parameters"=>array(),"name"=>"orgas-index","cache"=>false,"duration"=>false)),"/organizations/(.+?)/"=>array("get"=>array("controller"=>"controllers\\Organizations","action"=>"display","parameters"=>array(0),"name"=>"orgas-display","cache"=>false,"duration"=>false)));
