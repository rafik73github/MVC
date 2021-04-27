<?php

class Index_model extends Model 
{

    function __construct()
    {
      parent::__construct();
    }

    public function calc($a, $b)
    {
        return $a + $b;
    }

}

?>