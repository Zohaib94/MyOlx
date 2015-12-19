<?php

class Search_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function Search($tit,$minp,$maxp,$catid,$locid)
    {
        $minp = $minp * 1000;
        $maxp = $maxp * 1000000;
        $queryres = $this->db->query("SELECT * FROM ads WHERE (ATitle LIKE '%$tit%') AND (CatID=$catid) AND (LocID=$locid) AND (APrice>$minp AND APrice<$maxp)");
        if($queryres->num_rows>0)
        {
            return $queryres;
        }
        else 
        {
            return 0;
        }
    }
    
    public function SearchArr($tit,$minp,$maxp,$catid,$locid)
    {
        $minp = $minp * 1000;
        $maxp = $maxp * 1000000;
        $queryres = $this->db->query("SELECT * FROM ads WHERE (ATitle LIKE '%$tit%') AND (CatID=$catid) AND (LocID=$locid) AND (APrice>$minp AND APrice<$maxp)");
        if($queryres->num_rows>0)
        {
            return $queryres->result_array();
        }
        else 
        {
            return 0;
        }
    }
}
