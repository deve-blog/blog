<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

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
        return view('detail', array(
            'blog' => $blog
        ));
    }
}
