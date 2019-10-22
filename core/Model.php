<?php

namespace Core;

use PDO;

abstract class Model
{

    /**
     * Classe base para nossas Models.
     */
    private $pdo;
    protected $table;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function All()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->CloseCursor();
        $return $result;
    }
}