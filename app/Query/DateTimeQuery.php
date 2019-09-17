<?php
namespace App\Query;

class DateTimeQuery extends Query {
    public function __construct(\DateTime $start, \DateTime $end) {
        $query = [
            ['created_at', '>=', $start->format('Y-m-d H:i:s')],
            ['created_at', '<', $end->format('Y-m-d H:i:s')]
        ];
        parent::__construct($query);
    }
}