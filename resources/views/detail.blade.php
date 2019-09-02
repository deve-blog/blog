<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
        <title>文章详情</title>
        <link rel="stylesheet" href="./css/detail.css">
    </head>

    <body>
        <div class="wrap">
            <!-- 头 -->
            <header>
                <h1>博客名称</h1>
                <p class="header-info">这是一个新的站点</p>
            </header>
            <!-- 内容模块 -->
            <div class="content">
                <!-- 文章内容 -->
                <div class="detail">
                    <h2 class="article-title">{{ $blog->title }}</h2>
                    <div class="detail-userinfo">
                        <img src="{{ $avatarUrl }}" alt="用户头像" title="用户头像">
                        <p>{{ $blog->user->username }}</p>
                        <p>{{ $blog->created_at }}</p>
                    </div>
                    <article>
                        {{ $blog->content }}
                    </article>
                    <p class="comment-count">{{sizeof($blog->comment)}}</p>
                    <ul class="comment-list">
                    @foreach ($blog->comment as $comment)
                        <li>
                            <div class="comment-userinfo">
                                <img src="{{ $comment->avatarUrl }}" alt="评论人头像" title="评论人头像">
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
                    <form class="create-comment">
                        <h3>发表评论</h3>
                        <em class="create-tips">电子邮件地址不会被公开。 必填项已用*标注</em>
                        <div class="inputbox">
                            <label for="textarea">评论*</label>
                            <textarea name="textarea" id="" cols="45" rows="8" required></textarea>
                        </div>
                        <div class="inputbox">
                            <label for="name">姓名*</label>
                            <input class="input" type="text" placeholder="姓名" id="name" required>
                        </div>
                        <div class="inputbox">
                            <label for="email">电子邮箱*</label>
                            <input class="input" type="email" placeholder="电子邮箱" id="email" required>
                        </div>
                        <div class="inputbox inputbox-checkbox">
                            <input class="checkbox" type="checkbox" name="checkbox" id="checkbox">
                            <label for="checkbox">在此浏览器中保存我的名字、电邮和网站。</label>
                        </div>

                        <input class="submit-btn" type="submit" value="发表评论">
                    </form>
                    <div class="page-control">
                        <p class="previous">
                            <span><< 上一篇名称</span>
                        </p>
                        <p class="next">
                            <span>上一篇名称 >></span>
                        </p>
                    </div>
                </div>
                <!-- 右侧栏 -->
                <section class="side-section">
                    <!-- 搜索输入 -->
                    <div class="input-search">
                        <input type="text" name="search" id="search" placeholder="搜索...">
                        <img src="#" alt="搜索" title="点击搜索">
                    </div>
                    <!-- 最近文章 -->
                    <div class="recent-article">
                        <h3>近期文章</h3>
                        <ul>
                        @foreach ($recentArticle as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- 最近评论 -->
                    <div class="recent-comment">
                        <h3>近期评论</h3>
                        <ul>
                        @foreach ($recentComment as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- 按时间归档 -->
                    <div class="time-archive">
                        <h3>文章归档</h3>
                        <ul>
                        @foreach ($categoryArchive as $item)
                            <li>{{ $item }}</li>
                        @endforeachtimeArchive
                        </ul>
                    </div>
                    <!-- 按分类归档 -->
                    <div class="category-archive">
                        <h3>分类目录</h3>
                        <ul>
                        @foreach ($categoryArchive as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- 日历 -->
                    <div class="calender"></div>
                </section>
            </div>
            <!-- 脚 -->
            <footer>

            </footer>
        </div>
    </body>

</html>
