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
        $page = intval($request->get('page'));
        $page <= 0 && $page = 1;
        $paginate = new Paginate($page);
        $blogList = Blog::getBlogListByPaginate($paginate);

        return view('index', array(
            'blogList' => $blogList
        ));
    }
}
