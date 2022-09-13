<?php
require("database.php");

abstract class Model
{
    private $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = getPDO();
    }

    /**
     * Get all items of my DB
     * @return array
     */
    public function getAll(): array
    {
        $sql = "SELECT * FROM {$this->table}";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $items = $query->fetchAll();
        return $items;
    }
}
