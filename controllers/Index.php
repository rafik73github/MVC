<?php

class Index extends Controller
{
    function __construct($params)
    {
        parent::__construct();

        $this -> view -> controller = "Index";

        require_once 'models/Index_model.php';
        $this -> model = new Index_model();

        $action = "news";

        if(isset($params[1])) $action = ucfirst($params[1]);
        $this -> date = "Today";
        if(isset($params[2])) $this -> date = ucfirst($params[2]);
        $this -> time = "AllDays";
        if(isset($params[3])) $this -> time = ucfirst($params[3]);

        
        $this -> $action($this -> date, $this -> time);
    }

    private function news($date, $time)
    {
            echo 'News!!! - '. $date .' : '.$time.'<br>';
            echo $this -> model -> calc(3, 5).'<br>';
            $this -> view -> Render();
    }

    private function old()
    {
        echo 'bla bla bla';
}
}

?>