<?php
Class Database {

    private $pdo;

    public function __construct(){
        $connection_string = "mysql:host=localhost;dbname=blog_liepins; user=root; password=; charset=utf8mb4";
        $this->pdo = new PDO($connection_string);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function execute($query_string){

        $query = $this->pdo->prepare($query_string);

        $query->execute();

        return $query;
        
    }
}