<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
        <title>文章详情</title>
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
                /* 文章内容 */
                .detail{
                    width: 70%;
                    display: flex;
                    justify-content: space-between;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .article-title{
                    width: 100%;
                    font-size: 40px;
                    font-weight: 700;
                    margin-bottom: 30px;
                }
                .detail-userinfo{
                    width: 20%;
                }
                .detail-userinfo img{
                    display: block;
                    width: 50px;
                    height: 50px;
                }
                .detail-userinfo p{
                    font-size: 13px;
                    font-weight: 400;
                }
                .detail-userinfo p:hover{
                    cursor: pointer;
                    color: #007acc;
                    text-decoration: underline;
                }
                .detail article{
                    width: 75%;
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    margin-bottom: 100px;
                }
                .detail .comment-count{
                    display: block;
                    width: 100%;
                    padding: 25px 0;
                    font-size: 23px;
                    font-weight: 700;
                    border-top: 4px solid #000;
                }
                /* 评论列表 */
                .detail .comment-list{
                    list-style: none;
                }
                .detail .comment-list li{
                    border-top: 2px solid #cbcbcb;
                    padding: 40px 0;
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .comment-userinfo{
                    display: flex;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 30px;
                }
                .comment-userinfo img{
                    display: block;
                    width: 40px;
                    height: 40px;
                }
                .comment-userinfo p{
                    margin-left: 10px;
                }
                .comment-userinfo span{
                    display: block;
                }
                .comment-userinfo span:hover{
                    display: block;
                    cursor: pointer;
                }
                .comment-userinfo span:first-child{
                    font-size: 16px;
                    font-weight: 700;
                    color: #007acc;
                }
                .comment-userinfo span:first-child:hover{
                    color: #686868;
                }
                .comment-userinfo span:last-child{
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-userinfo span:last-child:hover{
                    color: #007acc;
                }
                .comment-tips{
                    padding: 10px;
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-content{
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    text-indent: 2em;
                    padding: 0 5px;
                }
                .comment-reply{
                    margin: 10px;
                }
                /* 创建评论 */
                .create-comment{
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                    border-top: 4px solid #000;
                    margin-top: 50px;
                }
                .create-comment h3{
                    width: 100%;
                    margin: 30px 0;
                    font-size: 23px;
                    font-weight: 700;
                    line-height: 30px;
                }
                .create-comment .create-tips{
                    width: 100%;
                    font-size: 13px;
                    font-weight: 40;
                    line-height: 21px;
                }
                .create-comment .inputbox{
                    width: 100%;
                    margin-top: 25px;
                }
                .create-comment .inputbox-checkbox{
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    user-select: none;
                }
                .inputbox-checkbox .checkbox{
                    width: auto;
                    margin-right: 5px;
                }
                .create-comment label{
                    width: 100%;
                    display: block;
                    font-size: 13px;
                    font-weight: 400;
                    line-height: 21px;
                    margin-bottom: 3px;
                }
                .create-comment .input,.create-comment textarea{
                    width: 100%;
                    background-color: #f6f6f6;
                    border: 1px #cbcbcb solid;
                    border-radius: 2px;
                    padding-left: 10px;
                }
                .create-comment .input{
                    height: 40px;
                }
                .create-comment textarea{
                    padding-top: 5px;
                }
                .create-comment .input:focus,.create-comment textarea:focus{
                    background-color: #fff;
                    border-color: #007acc;
                    color: #1a1a1a;
                    outline: 0;
                }
                .create-comment .submit-btn{
                    margin: 30px 0;
                    background: #1a1a1a;
                    border: 0;
                    border-radius: 2px;
                    color: #fff;
                    font-weight: 700;
                    padding: 10px 20px;
                    text-transform: uppercase;
                }
                .create-comment .submit-btn:hover{
                    cursor: pointer;
                    background-color: #006fc5;
                }
                /* 翻页键 */
                .page-control{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 100%;
                    color: #686868;
                    font-size: 13px;
                    font-weight: 400;
                    border-top: 4px #000 solid;
                }
                .page-control span{
                    display: block;
                    width: 100%;
                    color: #686868;
                    font-size: 22px;
                    font-weight: 700;
                    padding: 10px;
                }
                .page-control span:hover{
                    cursor: pointer;
                    text-decoration: underline;
                    color: #007acc;
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
                /* 文章内容 */
                .detail{
                    width: 70%;
                    display: flex;
                    justify-content: space-between;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .article-title{
                    width: 100%;
                    font-size: 40px;
                    font-weight: 700;
                    margin-bottom: 30px;
                }
                .detail-userinfo{
                    width: 20%;
                }
                .detail-userinfo img{
                    display: block;
                    width: 50px;
                    height: 50px;
                }
                .detail-userinfo p{
                    font-size: 13px;
                    font-weight: 400;
                }
                .detail-userinfo p:hover{
                    cursor: pointer;
                    color: #007acc;
                    text-decoration: underline;
                }
                .detail article{
                    width: 75%;
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    margin-bottom: 100px;
                }
                .detail .comment-count{
                    display: block;
                    width: 100%;
                    padding: 25px 0;
                    font-size: 23px;
                    font-weight: 700;
                    border-top: 4px solid #000;
                }
                /* 评论列表 */
                .detail .comment-list{
                    list-style: none;
                }
                .detail .comment-list li{
                    border-top: 2px solid #cbcbcb;
                    padding: 40px 0;
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .comment-userinfo{
                    display: flex;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 30px;
                }
                .comment-userinfo img{
                    display: block;
                    width: 40px;
                    height: 40px;
                }
                .comment-userinfo p{
                    margin-left: 10px;
                }
                .comment-userinfo span{
                    display: block;
                }
                .comment-userinfo span:hover{
                    display: block;
                    cursor: pointer;
                }
                .comment-userinfo span:first-child{
                    font-size: 16px;
                    font-weight: 700;
                    color: #007acc;
                }
                .comment-userinfo span:first-child:hover{
                    color: #686868;
                }
                .comment-userinfo span:last-child{
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-userinfo span:last-child:hover{
                    color: #007acc;
                }
                .comment-tips{
                    padding: 10px;
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-content{
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    text-indent: 2em;
                    padding: 0 5px;
                }
                .comment-reply{
                    margin: 10px;
                }
                /* 创建评论 */
                .create-comment{
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                    border-top: 4px solid #000;
                    margin-top: 50px;
                }
                .create-comment h3{
                    width: 100%;
                    margin: 30px 0;
                    font-size: 23px;
                    font-weight: 700;
                    line-height: 30px;
                }
                .create-comment .create-tips{
                    width: 100%;
                    font-size: 13px;
                    font-weight: 40;
                    line-height: 21px;
                }
                .create-comment .inputbox{
                    width: 100%;
                    margin-top: 25px;
                }
                .create-comment .inputbox-checkbox{
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    user-select: none;
                }
                .inputbox-checkbox .checkbox{
                    width: auto;
                    margin-right: 5px;
                }
                .create-comment label{
                    width: 100%;
                    display: block;
                    font-size: 13px;
                    font-weight: 400;
                    line-height: 21px;
                    margin-bottom: 3px;
                }
                .create-comment .input,.create-comment textarea{
                    width: 100%;
                    background-color: #f6f6f6;
                    border: 1px #cbcbcb solid;
                    border-radius: 2px;
                    padding-left: 10px;
                }
                .create-comment .input{
                    height: 40px;
                }
                .create-comment textarea{
                    padding-top: 5px;
                }
                .create-comment .input:focus,.create-comment textarea:focus{
                    background-color: #fff;
                    border-color: #007acc;
                    color: #1a1a1a;
                    outline: 0;
                }
                .create-comment .submit-btn{
                    margin: 30px 0;
                    background: #1a1a1a;
                    border: 0;
                    border-radius: 2px;
                    color: #fff;
                    font-weight: 700;
                    padding: 10px 20px;
                    text-transform: uppercase;
                }
                .create-comment .submit-btn:hover{
                    cursor: pointer;
                    background-color: #006fc5;
                }
                /* 翻页键 */
                .page-control{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 100%;
                    color: #686868;
                    font-size: 13px;
                    font-weight: 400;
                    border-top: 4px #000 solid;
                }
                .page-control span{
                    display: block;
                    width: 100%;
                    color: #686868;
                    font-size: 22px;
                    font-weight: 700;
                    padding: 10px;
                }
                .page-control span:hover{
                    cursor: pointer;
                    text-decoration: underline;
                    color: #007acc;
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
                /* 文章内容 */
                .detail{
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .article-title{
                    width: 100%;
                    font-size: 40px;
                    font-weight: 700;
                    margin-bottom: 30px;
                }
                .detail-userinfo{
                    width: 20%;
                }
                .detail-userinfo img{
                    display: block;
                    width: 50px;
                    height: 50px;
                }
                .detail-userinfo p{
                    font-size: 13px;
                    font-weight: 400;
                }
                .detail-userinfo p:hover{
                    cursor: pointer;
                    color: #007acc;
                    text-decoration: underline;
                }
                .detail article{
                    width: 75%;
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    margin-bottom: 100px;
                }
                .detail .comment-count{
                    display: block;
                    width: 100%;
                    padding: 25px 0;
                    font-size: 23px;
                    font-weight: 700;
                    border-top: 4px solid #000;
                }
                /* 评论列表 */
                .detail .comment-list{
                    list-style: none;
                }
                .detail .comment-list li{
                    border-top: 2px solid #cbcbcb;
                    padding: 40px 0;
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .comment-userinfo{
                    display: flex;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 30px;
                }
                .comment-userinfo img{
                    display: block;
                    width: 40px;
                    height: 40px;
                }
                .comment-userinfo p{
                    margin-left: 10px;
                }
                .comment-userinfo span{
                    display: block;
                }
                .comment-userinfo span:hover{
                    display: block;
                    cursor: pointer;
                }
                .comment-userinfo span:first-child{
                    font-size: 16px;
                    font-weight: 700;
                    color: #007acc;
                }
                .comment-userinfo span:first-child:hover{
                    color: #686868;
                }
                .comment-userinfo span:last-child{
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-userinfo span:last-child:hover{
                    color: #007acc;
                }
                .comment-tips{
                    padding: 10px;
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-content{
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    text-indent: 2em;
                    padding: 0 5px;
                }
                .comment-reply{
                    margin: 10px;
                }
                /* 创建评论 */
                .create-comment{
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                    border-top: 4px solid #000;
                    margin-top: 50px;
                }
                .create-comment h3{
                    width: 100%;
                    margin: 30px 0;
                    font-size: 23px;
                    font-weight: 700;
                    line-height: 30px;
                }
                .create-comment .create-tips{
                    width: 100%;
                    font-size: 13px;
                    font-weight: 40;
                    line-height: 21px;
                }
                .create-comment .inputbox{
                    width: 100%;
                    margin-top: 25px;
                }
                .create-comment .inputbox-checkbox{
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    user-select: none;
                }
                .inputbox-checkbox .checkbox{
                    width: auto;
                    margin-right: 5px;
                }
                .create-comment label{
                    width: 100%;
                    display: block;
                    font-size: 13px;
                    font-weight: 400;
                    line-height: 21px;
                    margin-bottom: 3px;
                }
                .create-comment .input,.create-comment textarea{
                    width: 100%;
                    background-color: #f6f6f6;
                    border: 1px #cbcbcb solid;
                    border-radius: 2px;
                    padding-left: 10px;
                }
                .create-comment .input{
                    height: 40px;
                }
                .create-comment textarea{
                    padding-top: 5px;
                }
                .create-comment .input:focus,.create-comment textarea:focus{
                    background-color: #fff;
                    border-color: #007acc;
                    color: #1a1a1a;
                    outline: 0;
                }
                .create-comment .submit-btn{
                    margin: 30px 0;
                    background: #1a1a1a;
                    border: 0;
                    border-radius: 2px;
                    color: #fff;
                    font-weight: 700;
                    padding: 10px 20px;
                    text-transform: uppercase;
                }
                .create-comment .submit-btn:hover{
                    cursor: pointer;
                    background-color: #006fc5;
                }
                /* 翻页键 */
                .page-control{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 100%;
                    color: #686868;
                    font-size: 13px;
                    font-weight: 400;
                    border-top: 4px #000 solid;
                    margin-bottom: 30px;
                }
                .page-control span{
                    display: block;
                    width: 100%;
                    color: #686868;
                    font-size: 22px;
                    font-weight: 700;
                    padding: 10px;
                }
                .page-control span:hover{
                    cursor: pointer;
                    text-decoration: underline;
                    color: #007acc;
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
                /* 文章内容 */
                .detail{
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .article-title{
                    width: 100%;
                    font-size: 40px;
                    font-weight: 700;
                    margin-bottom: 30px;
                }
                .detail-userinfo{
                    width: 20%;
                }
                .detail-userinfo img{
                    display: block;
                    width: 50px;
                    height: 50px;
                }
                .detail-userinfo p{
                    font-size: 13px;
                    font-weight: 400;
                }
                .detail-userinfo p:hover{
                    cursor: pointer;
                    color: #007acc;
                    text-decoration: underline;
                }
                .detail article{
                    width: 75%;
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    margin-bottom: 100px;
                }
                .detail .comment-count{
                    display: block;
                    width: 100%;
                    padding: 25px 0;
                    font-size: 23px;
                    font-weight: 700;
                    border-top: 4px solid #000;
                }
                /* 评论列表 */
                .detail .comment-list{
                    list-style: none;
                }
                .detail .comment-list li{
                    border-top: 2px solid #cbcbcb;
                    padding: 40px 0;
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                }
                .comment-userinfo{
                    display: flex;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 30px;
                }
                .comment-userinfo img{
                    display: block;
                    width: 40px;
                    height: 40px;
                }
                .comment-userinfo p{
                    margin-left: 10px;
                }
                .comment-userinfo span{
                    display: block;
                }
                .comment-userinfo span:hover{
                    display: block;
                    cursor: pointer;
                }
                .comment-userinfo span:first-child{
                    font-size: 16px;
                    font-weight: 700;
                    color: #007acc;
                }
                .comment-userinfo span:first-child:hover{
                    color: #686868;
                }
                .comment-userinfo span:last-child{
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-userinfo span:last-child:hover{
                    color: #007acc;
                }
                .comment-tips{
                    padding: 10px;
                    font-size: 13px;
                    font-weight: 400;
                    color: #686868;
                }
                .comment-content{
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    text-indent: 2em;
                    padding: 0 5px;
                }
                .comment-reply{
                    margin: 10px;
                }
                /* 创建评论 */
                .create-comment{
                    display: flex;
                    justify-content: flex-start;
                    align-content: flex-start;
                    flex-wrap: wrap;
                    border-top: 4px solid #000;
                    margin-top: 50px;
                }
                .create-comment h3{
                    width: 100%;
                    margin: 30px 0;
                    font-size: 23px;
                    font-weight: 700;
                    line-height: 30px;
                }
                .create-comment .create-tips{
                    width: 100%;
                    font-size: 13px;
                    font-weight: 40;
                    line-height: 21px;
                }
                .create-comment .inputbox{
                    width: 100%;
                    margin-top: 25px;
                }
                .create-comment .inputbox-checkbox{
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    user-select: none;
                }
                .inputbox-checkbox .checkbox{
                    width: auto;
                    margin-right: 5px;
                }
                .create-comment label{
                    width: 100%;
                    display: block;
                    font-size: 13px;
                    font-weight: 400;
                    line-height: 21px;
                    margin-bottom: 3px;
                }
                .create-comment .input,.create-comment textarea{
                    width: 100%;
                    background-color: #f6f6f6;
                    border: 1px #cbcbcb solid;
                    border-radius: 2px;
                    padding-left: 10px;
                }
                .create-comment .input{
                    height: 40px;
                }
                .create-comment textarea{
                    padding-top: 5px;
                }
                .create-comment .input:focus,.create-comment textarea:focus{
                    background-color: #fff;
                    border-color: #007acc;
                    color: #1a1a1a;
                    outline: 0;
                }
                .create-comment .submit-btn{
                    margin: 30px 0;
                    background: #1a1a1a;
                    border: 0;
                    border-radius: 2px;
                    color: #fff;
                    font-weight: 700;
                    padding: 10px 20px;
                    text-transform: uppercase;
                }
                .create-comment .submit-btn:hover{
                    cursor: pointer;
                    background-color: #006fc5;
                }
                /* 翻页键 */
                .page-control{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 100%;
                    color: #686868;
                    font-size: 13px;
                    font-weight: 400;
                    border-top: 4px #000 solid;
                }
                .page-control span{
                    display: block;
                    width: 100%;
                    color: #686868;
                    font-size: 22px;
                    font-weight: 700;
                    padding: 10px;
                }
                .page-control span:hover{
                    cursor: pointer;
                    text-decoration: underline;
                    color: #007acc;
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
                <h1>博客名称</h1>
                <p class="header-info">这是一个新的站点</p>
            </header>
            <!-- 内容模块 -->
            <div class="content">
                <!-- 文章内容 -->
                <div class="detail">
                    <h2 class="article-title">{{ $title }}</h2>
                    <div class="detail-userinfo">
                        <img src="{{ $avatarUrl }}" alt="用户头像" title="用户头像">
                        <p>{{$nickName}}</p>
                        <p>{{$createdAt}}</p>
                    </div>
                    <article>
                        {{content}}
                    </article>
                    <p class="comment-count">{{sizeof($comment)}}</p>
                    <ul class="comment-list">
                    @foreach ($comment as $item)
                        <li>
                            <div class="comment-userinfo">
                                <img src="{{ $item->avatarUrl }}" alt="评论人头像" title="评论人头像">
                                <p>
                                    <span>{{ $item->nickName }}</span>
                                    <span >{{ $item->createdAt }}</span>
                                </p>
                            </div>
                            @if ( $item->hasChecked )
                            <em class="comment-tips">您的评论现正待审。这是一份预览，您的评论将在被批准后显示。</em>
                            @endif
                            <p class="comment-content">{{ $item->content }}</p>
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
