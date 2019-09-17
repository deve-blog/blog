<?php
namespace App\Query;

class Query {
    private $query;

    public function __construct(array $query) {
        $this->query = $query;
    }

    public function getQuery() {
        return $this->query;
    }
}