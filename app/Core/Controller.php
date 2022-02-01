<?php 

class Controller{
    
    public function Model($model){
        require_once '../app/Models/'. $model . '.php';
        return new $model;
    }

    public function View($view, $context = []){
        require_once '../app/Views/' . $view . '.php';
    }

}   

?>