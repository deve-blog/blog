<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public static function getBlogListByPaginate(Paginate $paginate) {
        return self::orderBy('id', 'desc')
            ->offset(($paginate->getPage() - 1) * $paginate->getSize())
            ->limit($paginate->getSize())
            ->get();
    }
}
