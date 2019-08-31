<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function blog() {
        return $this->hasMany(Blog::class, 'cat_id', 'id');
    }

    /**
     * 获取所有存在博客的品类
     * @param integer $num
     * @return Collection
     */
    public static function getCategoryListOfHasBlog($num) {
        return self::has('blog')
            ->orderBy('cat_name', 'desc')
            ->get();
    }
}
