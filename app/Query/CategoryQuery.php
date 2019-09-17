<?php
namespace App\Query;

class CategoryQuery extends Query {
    public function __construct(int $catId) {
        $query = [
            ['cat_id', '=', $catId]
        ];
        parent::__construct($query);
    }
}