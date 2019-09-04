<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
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

    /**
     * commit comment
     *
     * @param Request $request
     * @return Response
     */
    public function addComment(Request $request) {
        $request->validate([
            'content' => 'bail|required|string|min:1',
            'name' => 'bail|required|string|min:1',
            'email' => 'bail|required|string|email'
        ]);
        $blogId = intval($request->post('blog_id'));
        if (Blog::where('id', $blogId)->doesntExist()) {
            return back()->withInput();
        }
        $date = date('Y-m-d H:i:s');
        $comment = new Comment();
        $comment->blog_id = $blogId;
        $comment->name = $request->post('name');
        $comment->email = $request->post('email');
        $comment->content = $request->post('content');
        $comment->created_at = $date;
        $comment->updated_at = $date;
        if ($comment->save()) {
            return redirect()->route('blog', ['id' => $blogId]);
        } else {
            return back()->withInput();
        }
    }
}
