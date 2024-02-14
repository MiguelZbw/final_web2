<?php
include "./model/cancionModel.php";
include "./view/cancionView.php";

class CancionController{    
    private $cancionModel;
    private $cancionView;

    public function __construct()
    {
        $this->cancionModel = new CancionModel();
        $this->cancionView = new CancionView();
    }

    public function HolaMundo(){      
        $this->cancionView->Home();
    }

    public function perdiste(){
        echo ("the game");        
    }
}