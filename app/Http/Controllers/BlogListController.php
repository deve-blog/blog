<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Paginate;
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
        $paginate = new Paginate($page, config('site.list_size'));
        $blogList = Blog::getBlogListByPaginate($paginate);
        /** @var Blog $blog */
        foreach ($blogList as $blog) {
            $blog->text = strip_tags($blog->content);
            $blog->created_at_text = $blog->created_at->format('Y年m月d日');
        }

        return view('index', array(
            'blogList' => $blogList,
        ));
    }
}
