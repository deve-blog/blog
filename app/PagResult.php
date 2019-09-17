<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;

class PagResult {
    private $paginate;
    private $list;
    private $total;

    public function setPaginate(Paginate $paginate) {
        $this->paginate = $paginate;
    }

    public function getPaginate() {
        return $this->paginate;
    }

    public function setList(Collection $list) {
        $this->list = $list;
    }

    public function getList() {
        return $this->list;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function getTotal() {
        return $this->total;
    }
}