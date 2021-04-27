<?php

class Model
{
    function __construct()
    {
        $this -> mysql = new mysqli('mysql-727668.vipserv.org', 'rafik73_skrm', 'Rafaello730929@', 'rafik73_skrm');
    }

    public function Select($select = "*", $from = null, $where = null, $orderBy = null, $limit = null)
    {
        $query = "SELECT ".$select;
        if($from != null) $query .= " FROM ".$from;
        if($where != null) $query .= " WHERE ".$where;
        if($orderBy != null) $query .= " ORDER BY ".$orderBy;
        if($limit != null) $query .= " LIMIT ".$limit;

        return $this -> mysql -> exec($query);
    }
}

?>