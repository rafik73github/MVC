<?php

class View
{
    function __construct()
    {
        
    }

    public function Render()
    {
       echo $this -> controller;     
        
        //require_once 'views/' . $this -> controller;
    }
}

?>