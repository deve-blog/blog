<?php
namespace App\Http\View\Composers;

use App\Blog;
use App\Category;
use App\Comment;
use Illuminate\View\View;

class RightNavComposer {
    public function compose(View $view) {
        // 近期文章
        $recentBlogList= Blog::getRecentBlogList(config('site.recent_blog_size'));
        $view->with('recentBlogList', $recentBlogList);

        // 近期评论
        $recentCommentList = Comment::getRecentCommenList(config('site.recent_comment_size'));
        $view->with('recentCommentList', $recentCommentList);

        // 时间归档
        $timeList = Blog::timeArchive(config('site.time_archive_size'));
        $view->with('timeList', $timeList);

        // 文章归类
        $categoryList = Category::getCategoryListOfHasBlog(config('site.category_size'));
        $view->with('categoryList', $categoryList);

        // 网站title
        $view->with('siteFirstTitle', config('site.site_first_title'));
        $view->with('siteSecondTitle', config('site.site_second_title'));
    }
}