<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;

class Blog extends Model
{

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    /**
     * 获取分页博客列表数据
     * @param Paginate $paginate
     * @return Collection
     */
    public static function getBlogListByPaginate(Paginate $paginate) {
        return self::orderBy('id', 'desc')
            ->offset(($paginate->getPage() - 1) * $paginate->getSize())
            ->limit($paginate->getSize())
            ->get();
    }

    /**
     * 获取最近几篇文章
     * @param integer $num
     * @return Collection
     */
    public static function getRecentBlogList($num) {
        $paginate = new Paginate(1, $num);
        return self::getBlogListByPaginate($paginate);
    }

    /**
     * 博客时间归档
     * @param integer $num
     * @return Collection
     */
    public static function timeArchive($num) {
        return self::select(DB::raw("date_format(created_at, '%Y年%m月') date"))
            ->orderBy('date', 'desc')
            ->distinct()
            ->limit($num)
            ->pluck('date');
    }
}
