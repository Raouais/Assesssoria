<?php

namespace App;

use \PDO;

class Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost') {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->generatePDO();
    }


    // génération du PDO
    private function generatePDO(){
        $pdo = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name, $this->db_user, $this->db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
    }

    public function query($statement, $one = false){
        $req = $this->pdo->query($statement);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0 
        ){
            return $req;
        }
        $req->setFetchMode(PDO::FETCH_OBJ);
        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;


    }

    public function get($statement){
        $req = $this->pdo->query($statement);
        $data = $req->fetchAll();
        return $data;
    }

    public function prepare($statement, $attributs, $one = false){
        $req = $this->pdo->prepare($statement);
        $res = $req->execute($attributs);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0 
        ){
            return $res;
        }
        
        $req->setFetchMode(PDO::FETCH_OBJ);
        
        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}