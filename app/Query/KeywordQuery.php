<?php
namespace App\Query;

class KeywordQuery extends Query {
    public function __construct(string $keyword) {
        $query = [
            ['text', 'like', '%' . $keyword . '%']
        ];
        parent::__construct($query);
    }
}