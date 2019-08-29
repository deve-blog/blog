<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paginate extends Model
{
    protected $page;
    protected $size = 15;

    public function __construct($page = null, $size = null) {
        parent::__construct();
        $page && $this->page = $page;
        $size && $this->size = $size;
    }

    public function getSize() {
        return $this->size;
    }

    public function getPage() {
        return $this->page;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function setPage($page) {
        $this->page = $page;
    }
}
