<?php

/*
 * -------------------------------------
 * juan andino
 * framework 
 * Model.php
 * -------------------------------------
 */


class Model
{
    protected $_db;
    
    public function __construct() {
        $this->_db = new Database();
    }
}

?>
