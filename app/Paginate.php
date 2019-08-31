<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paginate extends Model
{
    protected $page;
    protected $size;

    public function __construct($page, $size) {
        parent::__construct();
        $this->page = $page;
        $this->size = $size;
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
