<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
        <title>首页</title>
        <link rel="stylesheet" href="/css/index.css">
    </head>

    <body>
        <div class="wrap">
            <!-- 头 -->
            <header>
                <h1><a href="/">{{ $siteFirstTitle }}</a></h1>
                <p class="header-info">{{ $siteSecondTitle }}</p>
            </header>
            <!-- 内容模块 -->
            <div class="content">
                <!-- 文章列表 -->
                @section("blog-content")
                @show
                <!-- 右侧栏 -->
                <section class="side-section">
                    <!-- 搜索输入 -->
                    <div class="input-search">
                        <input type="text" name="search" id="search" placeholder="搜索...">
                        <img src="/img/search.png" alt="搜索" title="点击搜索">
                    </div>
                    <!-- 最近文章 -->
                    @if(!$recentBlogList->isEmpty())
                    <div class="recent-article">
                        <h3>近期文章</h3>
                        <ul>
                        @foreach ($recentBlogList as $item)
                            <li><a href="#">{{ $item->title }}</a></li>
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
                            <li><a href="#">{{ $item->name }}</a> 发表在 <a href="#">{{ $item->blog->title }}</a></li>
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
                            <li><a href="#">{{ $item }}</a></li>
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
                            <li><a href="#">{{ $item->cat_name }}</a></li>
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
