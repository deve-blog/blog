<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * 博客列表页搜索
     * @param array $querys 查询类数组
     * @param Paginate $paginate
     * @return PagResult
     */
    public static function getBlogListByPaginate(Paginate $paginate, array $querys = array()) {
        $pagResult = new PagResult();
        $pagResult->setPaginate($paginate);
        $queryBuilder = self::orderBy('id', 'desc');
        $where = array();
        foreach ($querys as $query) {
            $where += $query->getQuery();
        }
        if (!empty($where)) {
            $queryBuilder->where($where);
        }
        $pagResult->setTotal($queryBuilder->count());
        $list = $queryBuilder->offset(($paginate->getPage() - 1) * $paginate->getSize())
            ->limit($paginate->getSize())
            ->get();
        $pagResult->setList($list);
        return $pagResult;
    }

    /**
     * 获取最近几篇文章
     * @param integer $num
     * @return Collection
     */
    public static function getRecentBlogList($num) {
        $paginate = new Paginate(1, $num);
        return self::getBlogListByPaginate($paginate)->getList();
    }

    /**
     * 博客时间归档
     * @param integer $num
     * @return Collection
     */
    public static function timeArchive($num) {
        return self::orderBy('created_at', 'desc')
            ->distinct()
            ->limit($num)
            ->pluck('created_at');
    }

    /**
     * @param $id
     * @return Blog|null
     */
    public static function getBlogById($id) {
        return self::find($id);
    }

    /**
     * 获取当前博客上一篇博客
     * @return Blog|null
     */
    public function getPreviousBlog() {
        return $this->where('id', '<', $this->id)
                    ->orderBy('id', 'desc')
                    ->first();
    }

    /**
     * 获取当前博客下一篇博客
     * @return Blog|null
     */
    public function getNextBlog() {
        return $this->where('id', '>', $this->id)
            ->orderBy('id', 'asc')
            ->first();
    }
}
