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
     * 博客列表数据
     * @param string $search 搜索
     * @param Paginate $paginate
     * @return Collection
     */
    public static function getBlogListByPaginate(Paginate $paginate, string $search = '') {
        $queryBuilder = self::orderBy('id', 'desc');
        if (!empty($search)) {
            $queryBuilder->where('text', 'like', '%' . $search . '%');
        }
        return $queryBuilder->offset(($paginate->getPage() - 1) * $paginate->getSize())
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
