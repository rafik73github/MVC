<?php

class Gallery extends Controller
{
    function __construct($params)
    {
        parent::__construct();
        $this -> view -> controller = "Gallery";
        $this -> view -> Render();
    }
}

?>