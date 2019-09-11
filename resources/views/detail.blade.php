@extends("layout.blogbase")

@section("blog-content")
<div class="detail">
    <h2 class="article-title">{{ $blog->title }}</h2>
    <div class="detail-userinfo">
        <img src="/img/icon.png" alt="用户头像" title="用户头像">
        <p>{{ $blog->user->username }}</p>
        <p>{{ $blog->created_at }}</p>
    </div>
    <article>
        {{ $blog->content }}
    </article>
    <p class="comment-count">《{{ $blog->title }}》 有 {{sizeof($blog->comment)}} 个想法</p>
    <ul class="comment-list">
    @foreach ($blog->comment as $comment)
        <li>
            <div class="comment-userinfo">
                <img src="/img/icon.png" alt="评论人头像" title="评论人头像">
                <p>
                    <span>{{ $comment->name }}</span>
                    <span >{{ $comment->created_at }}</span>
                </p>
            </div>
            @if ( $comment->hasChecked )
            <em class="comment-tips">您的评论现正待审。这是一份预览，您的评论将在被批准后显示。</em>
            @endif
            <p class="comment-content">{{ $comment->content }}</p>
            <input class="comment-reply" type="button" value="回复">
        </li>
    @endforeach
    </ul>
    <form class="create-comment" action="/comment/add" method="POST">
        @csrf
        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
        <h3>发表评论</h3>
        <em class="create-tips">电子邮件地址不会被公开。 必填项已用*标注</em>
        <div class="inputbox">
            <label for="textarea">评论*</label>
            <textarea name="content" id="content" cols="45" rows="8" required></textarea>
        </div>
        <div class="inputbox">
            <label for="name">姓名*</label>
            <input class="input" type="text" name="name" placeholder="姓名" id="name" required>
        </div>
        <div class="inputbox">
            <label for="email">电子邮箱*</label>
            <input class="input" type="email" placeholder="电子邮箱" id="email" name="email" required>
        </div>
        <div class="inputbox inputbox-checkbox">
            <input class="checkbox" type="checkbox" name="checkbox" id="checkbox">
            <label for="checkbox">在此浏览器中保存我的名字、电邮和网站。</label>
        </div>

        <input class="submit-btn" type="submit" value="发表评论">
    </form>
    <div class="detail-page-control">
        @isset($blog->getPreviousBlog()->id)
        <a class="next" href="/blog/{{ $blog->getPreviousBlog()->id }}">
            <span>上一篇</span>
            <p>{{ $blog->getPreviousBlog()->title }} </p>
        </a>
        @endisset
        @isset($blog->getNextBlog()->id)
        <a class="previous" href="/blog/{{ $blog->getNextBlog()->id }}">
            <span>下一篇</span>
            <p> {{ $blog->getNextBlog()->title }}</p>
        </a>
        @endisset
    </div>
</div>
@endsection