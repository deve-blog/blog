<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
        <title>首页</title>
        <!-- <link rel="stylesheet" href="index.css"> -->
        <style>
            *{
                margin: 0;
                padding: 0;
                transition: all .3s ease-in-out;
            }
            html,body{
                width: 100%;
                background-color: #000;
            }
            /* 头 */
            header{
                margin: 0 auto;
                width: 90%;
                padding: 70px 0;
            }
            header h1{
                font-size: 23px;
                font-weight: 700;
            }
            header .header-info{
                margin-top: 5px;
                font-size: 13px;
                font-weight: 400;
                color: #91937c;
            }
            /* 脚 */
            footer{
                padding: 50px;
            }

            /* 媒体查询 */
            /* 大屏幕pc */
            @media screen and (min-width: 1200px) {
                .wrap{
                    margin: 0 auto;
                    width: 70%;
                    box-sizing: border-box;
                    background-color: #fff;
                }
                /* 内容模块 */
                .content{
                    width: 90%;
                    margin: 0 auto;
                    display: flex;
                    justify-content: space-between;
                }
                /* 搜索结果 */
                .search-section{
                    width: 0;
                    overflow: hidden;
                }
                /* 文章列表 */
                .list-section{
                    list-style: none;
                    width: 70%;
                }
                .list-item{
                    display: flex;
                    justify-content: flex-start;
                    flex-wrap: wrap;
                    padding: 60px 0;
                    border-top: 3px dashed rgba(0,0,0,.4);
                }
                .list-item h2{
                    width: 100%;
                    font-size: 28px;
                    font-weight: 700;
                    margin-bottom: 20px;
                }
                .list-item .options{
                    width: 30%;
                    color: #686868;
                }
                .list-item .options a{
                    font-size: 13px;
                    display: block;
                    color: #686868;
                    text-decoration: none;
                }
                .list-item .options a:hover{
                    cursor: pointer;
                    color: #94daf3;
                    text-decoration: underline;
                }
                .list-item .list-item-content{
                    width: 70%;
                    min-height: 10vw;
                    font-size: 16px;
                    font-weight: 400;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 8;
                    overflow: hidden;
                }
                /* 分页 */
                .page-control{
                    padding: 0;
                }
                .page-control .pages{
                    width: 100%;
                    list-style: none;
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                }
                .page-control li{
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                    opacity: .6;
                }
                .page-control li:hover{
                    cursor: pointer;
                    opacity: 1;
                    box-shadow: 0 5px 1px #999;
                }
                .page-control li .on{
                    cursor: pointer;
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                }

                /* 右边栏 */
                .side-section{
                    width: 25%;
                }
                .side-section div{
                    border-top: 4px solid #000;
                    padding: 20px 0 70px 0;
                }
                .side-section ul{
                    list-style-position: inside;
                    margin-top: 20px;
                }
                .side-section ul li{
                    list-style-position: inside;
                    margin-top: 20px;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                }
                /* 侧边栏搜索框 */
                .side-section .input-search{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .input-search input{
                    display: block;
                    padding: 7px 6px;
                    border: 1px #cbcbcb solid;
                    width: 100%;
                    height: 20px;
                }
                .input-search img{
                    display: block;
                    width: 36px;
                    height: 36px;
                    background-color: #000;
                }
            }
            /* pc */
            @media screen and (min-width: 1024px) and (max-width: 1200px) {
                .wrap{
                    margin: 0 auto;
                    width: 95%;
                    box-sizing: border-box;
                    background-color: #fff;
                }
                /* 内容模块 */
                .content{
                    width: 90%;
                    margin: 0 auto;
                    display: flex;
                    justify-content: space-between;
                }
                /* 搜索结果 */
                .search-section{
                    width: 0;
                    overflow: hidden;
                }
                /* 文章列表 */
                .list-section{
                    list-style: none;
                    width: 70%;
                }
                .list-item{
                    display: flex;
                    justify-content: flex-start;
                    flex-wrap: wrap;
                    padding: 60px 0;
                    border-top: 3px dashed rgba(0,0,0,.4);
                }
                .list-item h2{
                    width: 100%;
                    font-size: 28px;
                    font-weight: 700;
                    margin-bottom: 20px;
                }
                .list-item .options{
                    width: 30%;
                    color: #686868;
                }
                .list-item .options a{
                    font-size: 13px;
                    display: block;
                    color: #686868;
                    text-decoration: none;
                }
                .list-item .options a:hover{
                    cursor: pointer;
                    color: #94daf3;
                    text-decoration: underline;
                }
                .list-item .list-item-content{
                    width: 70%;
                    min-height: 10vw;
                    font-size: 16px;
                    font-weight: 400;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 8;
                    overflow: hidden;
                }
                /* 分页 */
                .page-control{
                    padding: 0;
                }
                .page-control .pages{
                    width: 100%;
                    list-style: none;
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                }
                .page-control li{
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                    opacity: .6;
                }
                .page-control li:hover{
                    cursor: pointer;
                    opacity: 1;
                    box-shadow: 0 5px 1px #999;
                }
                .page-control li .on{
                    cursor: pointer;
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                }
                /* 右边栏 */
                .side-section{
                    width: 25%;
                }
                .side-section div{
                    border-top: 4px solid #000;
                    padding: 20px 0 70px 0;
                }
                .side-section ul{
                    list-style-position: inside;
                    margin-top: 20px;
                }
                .side-section ul li{
                    list-style-position: inside;
                    margin-top: 20px;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                }
                /* 侧边栏搜索框 */
                .side-section .input-search{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .input-search input{
                    display: block;
                    padding: 7px 6px;
                    border: 1px #cbcbcb solid;
                    width: 100%;
                    height: 20px;
                }
                .input-search img{
                    display: block;
                    width: 36px;
                    height: 36px;
                    background-color: #000;
                }
            }
            /* pad */
            @media screen and (min-width: 768px) and (max-width: 1023px) {
                .wrap{
                    margin: 0 auto;
                    width: 95%;
                    box-sizing: border-box;
                    background-color: #fff;
                }
                /* 内容模块 */
                .content{
                    width: 90%;
                    margin: 0 auto;
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }
                /* 搜索结果 */
                .search-section{
                    width: 0;
                    overflow: hidden;
                }
                /* 文章列表 */
                .list-section{
                    list-style: none;
                    width: 100%;
                }
                .list-item{
                    display: flex;
                    justify-content: flex-start;
                    flex-wrap: wrap;
                    padding: 60px 0;
                    border-top: 3px dashed rgba(0,0,0,.4);
                }
                .list-item h2{
                    width: 100%;
                    font-size: 28px;
                    font-weight: 700;
                    margin-bottom: 20px;
                }
                .list-item .options{
                    width: 30%;
                    color: #686868;
                }
                .list-item .options a{
                    font-size: 13px;
                    display: block;
                    color: #686868;
                    text-decoration: none;
                }
                .list-item .options a:hover{
                    cursor: pointer;
                    color: #94daf3;
                    text-decoration: underline;
                }
                .list-item .list-item-content{
                    width: 70%;
                    min-height: 10vw;
                    font-size: 16px;
                    font-weight: 400;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 8;
                    overflow: hidden;
                }
                /* 分页 */
                .page-control{
                    padding: 0;
                }
                .page-control .pages{
                    width: 100%;
                    list-style: none;
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                }
                .page-control li{
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                    opacity: .6;
                }
                .page-control li:hover{
                    cursor: pointer;
                    opacity: 1;
                    box-shadow: 0 5px 1px #999;
                }
                .page-control li .on{
                    cursor: pointer;
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                }

                /* 右边栏 */
                .side-section{
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                }
                .side-section div{
                    width: 24%;
                    border-top: 4px solid #000;
                    padding: 20px 0 70px 0;
                }
                .side-section div:first-child{
                    width: 100%;
                    border-top: 4px solid #000;
                    padding: 20px 0 70px 0;
                }
                .side-section ul{
                    list-style-position: inside;
                    margin-top: 20px;
                }
                .side-section ul li{
                    list-style-position: inside;
                    margin-top: 20px;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                }
                /* 侧边栏搜索框 */
                .side-section .input-search{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .input-search input{
                    display: block;
                    padding: 7px 6px;
                    border: 1px #cbcbcb solid;
                    width: 100%;
                    height: 20px;
                }
                .input-search img{
                    display: block;
                    width: 36px;
                    height: 36px;
                    background-color: #000;
                }
            }
            /* phone */
            @media screen and (max-width: 767px) {
                .wrap{
                    width: 100%;
                    box-sizing: border-box;
                    background-color: #fff;
                }
                /* 内容模块 */
                .content{
                    width: 90%;
                    margin: 0 auto;
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }
                /* 搜索结果 */
                .search-section{
                    width: 0;
                    overflow: hidden;
                }
                /* 文章列表 */
                .list-section{
                    list-style: none;
                    width: 100%;
                }
                .list-item{
                    display: flex;
                    justify-content: flex-start;
                    flex-wrap: wrap;
                    padding: 60px 0;
                    border-top: 3px dashed rgba(0,0,0,.4);
                }
                .list-item h2{
                    width: 100%;
                    font-size: 28px;
                    font-weight: 700;
                    margin-bottom: 20px;
                }
                .list-item h2:hover{
                    cursor: pointer;
                    color: #006fc5;
                }
                .list-item .options{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: #686868;
                }
                .list-item .options a{
                    font-size: 13px;
                    color: #686868;
                    text-decoration: none;
                }
                .list-item .options a::before{
                    content: '/';
                    padding: 0 5px;
                }
                .list-item .options a:first-child::before{
                    content: '';
                    padding: 0;
                }
                .list-item .options a:hover{
                    cursor: pointer;
                    color: #94daf3;
                    text-decoration: underline;
                }
                .list-item .list-item-content{
                    min-height: 10vw;
                    font-size: 16px;
                    font-weight: 400;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 8;
                    overflow: hidden;
                }
                .page-control{
                    padding: 0;
                }
                /* 分页 */
                .page-control{
                    padding: 0;
                }
                .page-control .pages{
                    width: 100%;
                    list-style: none;
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                }
                .page-control li{
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                    opacity: .6;
                }
                .page-control li:hover{
                    cursor: pointer;
                    opacity: 1;
                    box-shadow: 0 5px 1px #999;
                }
                .page-control li .on{
                    cursor: pointer;
                    width: 10%;
                    text-align: center;
                    padding: 20px 0;
                }

                /* 右边栏 */
                .side-section{
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                }
                .side-section div{
                    width: 100%;
                    border-top: 4px solid #000;
                    padding: 20px 0 70px 0;
                }
                .side-section ul{
                    list-style-position: inside;
                    margin-top: 20px;
                }
                .side-section ul li{
                    list-style-position: inside;
                    margin-top: 20px;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                }
                /* 侧边栏搜索框 */
                .side-section .input-search{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .input-search input{
                    display: block;
                    padding: 7px 6px;
                    border: 1px #cbcbcb solid;
                    width: 100%;
                    height: 20px;
                }
                .input-search img{
                    display: block;
                    width: 36px;
                    height: 36px;
                    background-color: #000;
                }
            }
        </style>
    </head>

    <body>
        <div class="wrap">
            <!-- 头 -->
            <header>
                <h1> $blogName </h1>
                <p class="header-info"> $blogInfo </p>
            </header>
            <!-- 内容模块 -->
            <div class="content">
                <!-- 文章列表 -->
                <ul class="list-section">
                @foreach ($blogList as $item)
                    <li class="list-item">
                        <h2>{{ $item->title }}</h2>
                        <div class="options">
                            <a href="#">{{ $item->created_at }}</a>
                            <a href="#">留下你的评论</a>
                        </div>
                        <div class="list-item-content">
                            {{ $item->content }}
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
                        <img src="#" alt="搜索" title="点击搜索">
                    </div>
                    <!-- 最近文章 -->
                    <div class="recent-article">
                        <h3>近期文章</h3>
                        <ul>
                        @foreach ($recentBlogList as $item)
                            <li>{{ $item->title }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- 最近评论 -->
                    <div class="recent-comment">
                        <h3>近期评论</h3>
                        <ul>
                        @foreach ($recentCommentList as $item)
                            <li>{{ $item->title }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- 按时间归档 -->
                    <div class="time-archive">
                        <h3>文章归档</h3>
                        <ul>
                        @foreach ($timeList as $item)
                            <li>{{ $item->title }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- 按分类归档 -->
                    <div class="category-archive">
                        <h3>分类目录</h3>
                        <ul>
                        @foreach ($categoryList as $item)
                            <li>{{ $item->title }}</li>
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
