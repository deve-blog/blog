<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Paginate;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BlogListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // 获取博客列表
        $page = intval($request->get('p'));
        $page <= 0 && $page = 1;
        $paginate = new Paginate($page);
        $blogList = Blog::getBlogListByPaginate($paginate);
        /** @var Blog $blog */
        foreach ($blogList as $blog) {
            $blog->text = strip_tags($blog->content);
        }
        // 近期文章
        $recentBlogList= Blog::getRecentBlogList(config('site.recent_blog_size'));
        // 近期评论
        $recentCommentList = Comment::getRecentCommenList(config('site.recent_comment_size'));
        // 时间归档
        $timeList = Blog::timeArchive(config('site.time_archive_size'));
        $categoryList = new Collection();
        return view('index', array(
            'blogList' => $blogList,
            'recentBlogList' => $recentBlogList,
            'recentCommentList' => $recentCommentList,
            'timeList' => $timeList,
            'categoryList' => $categoryList,
            'siteFirstTitle' => config('site.site_first_name'),
            'siteSecondTitle' => config('site.site_second_name')
        ));
    }
}
