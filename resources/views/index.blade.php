<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
        <title>首页</title>
        <link rel="stylesheet" href="./css/index.css">
    </head>

    <body>
        <div class="wrap">
            <!-- 头 -->
            <header>
                <h1>{{ $siteFirstTitle }}</h1>
                <p class="header-info">{{ $siteSecondTitle }}</p>
            </header>
            <!-- 内容模块 -->
            <div class="content">
                <!-- 文章列表 -->
                <ul class="list-section">
                @foreach ($blogList as $item)
                    <li class="list-item">
                        <h2>{{ $item->title }}</h2>
                        <div class="options">
                            <a href="#">{{ $item->created_at_text }}</a>
                            <a href="#">留下你的评论</a>
                        </div>
                        <div class="list-item-content">
                            {{ $item->text }}
                        </div>
                    </li>
                @endforeach
                    <li class="list-item page-control">
                        <ul class="pages">
                            <li><a href="#">1</a></li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                        </ul>
                    </li>
                </ul>
                <!-- 右侧栏 -->
                <section class="side-section">
                    <!-- 搜索输入 -->
                    <div class="input-search">
                        <input type="text" name="search" id="search" placeholder="搜索...">
                        <img src="./img/search.png" alt="搜索" title="点击搜索">
                    </div>
                    <!-- 最近文章 -->
                    @if(!$recentBlogList->isEmpty())
                    <div class="recent-article">
                        <h3>近期文章</h3>
                        <ul>
                        @foreach ($recentBlogList as $item)
                            <li>{{ $item->title }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- 最近评论 -->
                    @if(!$recentCommentList->isEmpty())
                    <div class="recent-comment">
                        <h3>近期评论</h3>
                        <ul>
                        @foreach ($recentCommentList as $item)
                            <li>{{ $item->name }}发表在{{ $item->blog->title }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- 按时间归档 -->
                    @if(!$timeList->isEmpty())
                    <div class="time-archive">
                        <h3>文章归档</h3>
                        <ul>
                        @foreach ($timeList as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- 按分类归档 -->
                    @if(!$categoryList->isEmpty())
                    <div class="category-archive">
                        <h3>分类目录</h3>
                        <ul>
                        @foreach ($categoryList as $item)
                            <li>{{ $item->cat_name }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- 日历 -->
                    <div class="calender"></div>
                </section>
            </div>
            <!-- 脚 -->
            <footer>

            </footer>
        </div>

        <script>
            let query = location.search.slice(1).split('&');
            let q = {}
            for(let o of query){
                let sub = o.split('=');
                q[sub[0]]=sub[1];
            }
            console.log(q)
        </script>
    </body>

</html>
