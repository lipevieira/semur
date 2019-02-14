<?php
namespace Core;

class Controller{
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require 'Views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()){
        require 'Views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'Views/'.$viewName.'.php';
	}
// **********Chamando o menu para carregar as paginas de equipameto e emprestimo*******
	public function loadMenu($viewName, $viewData = array()){
        require 'Views/menu.php';
    }
}
