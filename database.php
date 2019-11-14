<?php

namespace database;

use PDO;
use PDOException;

class Database {

    public function __construct() {
        try {
            $this->conn = new PDO('mysql:host=phplocal.lt;dbname=phplocal', 'root', '');
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function select($sql, $param) {
        $stmt = $this->conn->query($sql);
        $stmt = $stmt->fetchAll(PDO::FETCH_CLASS, $param);
        return $stmt;
    }

    public function insert($sql) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        print 'inserted';
    }

    public function update($sql) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return;
    }

    public function remove($sql) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return;
    }

    public function __destruct() {
        $this->conn = null;
    }

}
