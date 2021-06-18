<?php

namespace App;

class Table {


    private $db;

	public function __construct(Database $db){
		$this->db = $db;
	}

    public function getHighestId($table){
        $highestId = $this->db->get("SELECT * FROM {$table} ORDER BY id DESC LIMIT 0, 1");
        return sizeof($highestId) > 0 ? $highestId[0][0] : 0;
    }

    
}
