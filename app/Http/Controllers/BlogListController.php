<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Paginate;
use App\Query\CategoryQuery;
use App\Query\DateTimeQuery;
use App\Query\KeywordQuery;
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

        $querys = array();
        $search = $request->get('search');
        if (!empty($search) && is_string($search)) {
            $querys[] = new KeywordQuery($search);
        }

        $date = $request->get('date');
        if (!empty($date) && is_string($date)) {
            try {
                $start = new \DateTime($date);
                $end = clone $start;
                $end->add(new \DateInterval('P1M'));
                $querys[] = new DateTimeQuery($start, $end);
            } catch (\Exception $e) {
                response('', 404);
            }
        }

        $catId = intval($request->get('catId'));
        if ($catId > 0) {
            $querys[] = new CategoryQuery($catId);
        }

        $pagResult = Blog::getBlogListByPaginate($paginate, $querys);

        /** @var Blog $blog */
        foreach ($pagResult->getList() as $blog) {
            $blog->created_at_text = $blog->created_at->format('Y年m月d日');
        }

        return view('index', array(
            'pagResult' => $pagResult,
        ));
    }
}
