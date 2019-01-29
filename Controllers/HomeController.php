<?php 
namespace Controllers;

use \Core\Controller;

class homeController extends Controller{

	public function index(){
		$array = array();
		$this->loadTemplate('home', $array);
	}
}