<?php

include_once "./libs/Smarty.class.php";

class CancionView {
    private $Smarty;
    public function __construct() {
        $this->Smarty = new Smarty();
    }
    public function Home(){
        $this->Smarty->display("./templates/HolaMundo.tpl");
    }
        
}
