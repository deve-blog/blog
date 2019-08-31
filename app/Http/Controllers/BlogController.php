<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $id = intval($id);
        /** @var Blog $blog */
        $blog = Blog::getBlogById($id);
        if (is_null($blog)) {
            return response('', 404);
        }
        // 近期文章
        $recentBlogList = Blog::getRecentBlogList(config('site.recent_blog_size'));
        // 近期评论
        $recentCommentList = Comment::getRecentCommenList(config('site.recent_comment_size'));
        // 时间归档
        $timeList = Blog::timeArchive(config('site.time_archive_size'));
        $categoryList = Category::getCategoryListOfHasBlog(config('site.category_size'));
        return view('detail', array(
            'blog' => $blog,
            'recentBlogList' => $recentBlogList,
            'recentCommentList' => $recentCommentList,
            'timeList' => $timeList,
            'categoryList' => $categoryList,
            'siteFirstTitle' => config('site.site_first_title'),
            'siteSecondTitle' => config('site.site_second_title')
        ));
    }
}
