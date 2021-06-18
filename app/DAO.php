<?php
namespace App;

class DAO{

	private $db;
	private $table;
	private $Table;

	public function __construct(Database $db){
		$this->db = $db;
		$this->Table = new Table($db);
	}

    public function all(){
        return $this->query('SELECT * FROM '.$this->table);
    }

    public function find($what,$where){
        return $this->query("SELECT * FROM  {$this->table}  WHERE {$where} = ?", [$what], true);
    }

    public function findAll($what,$where){
        return $this->query("SELECT * FROM  {$this->table}  WHERE {$where} = ?", [$what]);
    }      
    
	public function delete($id){
		return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
	}

    public function getLastId(){
        return $this->Table->getHighestId($this->table);
    }
    
    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        $attributes[] = $this->getLastId() + 1;
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ',$sql_parts);
        return $this->query("INSERT INTO {$this->table} SET id = ?, $sql_part", $attributes, true);
    }

    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ',$sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }
	
    /**
     * return les requetes preparer ou requetes directes
     * $attributs à null parce qu'ils sont optionnelle
     * $one initialiser a false si on veut plusieur enregistrements
     * le changment de table par entity sert à instancier une classe (classe qui perme d'avoir des articles)
     */
    public function query($statement, $attributs = null, $one = false){
        if($attributs){
            return $this->db->prepare(
                $statement, 
                $attributs, 
                $one
            );
        } else {
            return $this->db->query(
                $statement, 
                $one
            );
        }
    }

	public function setTable($table){
		$this->table = $table;
	}
}

?>