<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function blog() {
        return $this->belongsTo(Blog::class);
    }
    /**
     * @param integer $num
     * @return Collection
     */
    public static function getRecentCommenList($num) {
        return self::with('blog')
            ->orderBy('id', 'desc')
            ->limit($num)
            ->get();
    }
}
