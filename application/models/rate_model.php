<?php

class Rate_Model extends Rate_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function rate($raterID,$ratedID,$rating)
    {
        $this->db->query("INSERT INTO ratings(UID1,UID2,RATING) values ($raterID,$ratedID,$rating)");
        
    }
}
