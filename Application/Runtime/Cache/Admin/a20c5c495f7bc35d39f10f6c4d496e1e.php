<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/cs/Public/Admin/img/ooopic_1507533377.ico">
    <title>玩家攻略</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/cs/Public/Admin/css/bootstrap.css" rel="stylesheet"/>
    <link href="/cs/Public/Admin/css/docs.css" rel="stylesheet" type="text/css"/>
    <link href="/cs/Public/Admin/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="/cs/Public/Admin/css/style.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="/cs/Public/Admin/html5shiv.min.js"></script>
    <script src="/cs/Public/Admin/js/respond.min.js"></script>
    <![endif]-->
    <style>
        body{font-family:"ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;}
        h1, .h1, h2, .h2, h3, .h3, h4, .h4, .lead {font-family:"ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","Microsoft YaHei UI","Microsoft YaHei","WenQuanYi Micro Hei",sans-serif;}
        pre code { background: transparent; }
        @media (min-width: 768px) {
            .bs-docs-home .bs-social,
            .bs-docs-home .bs-masthead-links {
                margin-left: 0;
            }
        }
        html{
            cursor: url('/cs/Public/Admin/shubiao/link1.cur'),default;
        }
        a:hover{cursor: url('/cs/Public/Admin/shubiao/link2.cur'),default;}
        body{
            background-image: url('/cs/Public/Admin/img/55_104512_9489.jpg');
            width: 100%;
            background-size: cover;
            background-position: 10px;
        }
        ul{margin-top: 10px;}
        ul li{float: left;}
    </style>
</head>
<body class="bs-docs-home">
<a class="sr-only" href="#content">Skip to main content</a>

<!-- Docs master nav -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">官方</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html">首页</a>
                </li>
                <li>
                    <a href="gl.html">玩家攻略</a>
                </li>
                <li>
                    <a href="zl.html">游戏资料</a>
                </li>
                <li>
                    <a href="gr.html">个人中心</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- 按钮触发模态框 -->
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    登录
                </button>
                <button type="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mylog">
                    注册
                </button>
            </ul>
        </nav>
    </div>
</header>
<!-- 登录 -->
<ul class="sao">
    <h1><a href="#">今日头条</a></h1>
    <li><a href="#">2018-3-27开始更新内容</a></li>
    <li><a href="#">2018-3-28已经开始大更新</a></li>
    <li><a href="#">2018-3-28苦逼的我还在更新</a></li>
    <li><a href="#">2018-3-28替换内容</a></li>
    <li><a href="#">2018-3-28好鸡儿烦,烦的不要不要的，为了美化，再次努力</a></li>
    <li><a href="#">2018-3-28继续写写写</a></li>
</ul>
<ul class="bo">
    <div class="fin">
    <h1><a href="#">直播名人堂</a></h1>
    <li><a href="#">2018-3-27开始更新内容</a></li>
    <li><a href="#">2018-3-28已经开始大更新</a></li>
    <li><a href="#">2018-3-28苦逼的我还在更新</a></li>
    <li><a href="#">2018-3-28替换内容</a></li>
    <li><a href="#">2018-3-28好鸡儿烦,烦的不要不要的，为了美化，再次努力</a></li>
    <li><a href="#">2018-3-28继续写写写</a></li>
    </div>
</ul>
    <ul class="nav nav-tabs" role="tablist" style="">
        <a href="index.html"><img src="/cs/Public/Admin/img/timg2.jpg" class="lo"></a>
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">首页</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab1" data-toggle="tab">推荐</a></li>
        <li role="presentation"><a href="#jishu" aria-controls="messages" role="tab2" data-toggle="tab">技术</a></li>
        <li role="presentation"><a href="#sais" aria-controls="settings" role="tab3" data-toggle="tab">赛事</a></li>
        <li role="presentation"><a href="#yule" aria-controls="weixing" role="tab4" data-toggle="tab">娱乐</a></li>
    </ul>

    <!--首页-->
    <ul class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="/cs/Public/Admin/img/timg.jpg">精彩视频，玩转全新CS</div></a>
        </div>
        <!--首页视频-->
        <div class="modal fade" id="myMod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="/cs/Public/Admin/Raiders/mv/刀剑神域.mp4" controls="controls"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--推荐-->
        <div role="tabpanel" class="tab-pane" id="profile">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/timg (1).jpg">菜鸟进阶高手</div></a>
        </div>
        <!--推荐视频-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="/cs/Public/Admin/Raiders/mv/刀剑神域1.mp4" controls="controls" style="height: 363px;"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--技术-->
        <div role="tabpanel" class="tab-pane" id="jishu">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg">跑遍全图，就是如此的无聊</div></a>
        </div>
        <!--技术视频-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="/cs/Public/Admin/Raiders/mv/daojian1.mp4" controls="controls" style="height: 363px;"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--赛事-->
        <div role="tabpanel" class="tab-pane" id="sais">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg">中国选手TXT队获得冠军</div></a>
        </div>
        <!--赛事视频-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="/cs/Public/Admin/Raiders/mv/刀剑神域1.mp4" controls="controls" style="height: 363px;"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--娱乐-->
        <div role="tabpanel" class="tab-pane" id="yule">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg">无聊吗？那就来看直播吧</div></a>
        </div>
        <!--娱乐视频-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="/cs/Public/Admin/Raiders/mv/刀剑神域1.mp4" controls="controls" style="height: 363px;"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>
    </ul>

<form  action="/cs/index.php/Admin/Test/gl" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        登录
                    </h4>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">用户账号</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户账号">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">用户密码</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入用户密码">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                        </button>
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </form> <!-- /.modal-content -->
            </div>
        </div><!-- /.modal -->
    </div>
</form>
<!-- 注册 -->
<div class="modal fade" id="mylog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabela">注册</h4>
            </div>
            <div class="modal-body">
                <label for="exampleInputEmail1">用户账号</label>
                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入用户账号">
                <label for="exampleInputPassword1">用户密码</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="请输入用户密码">
                <label for="exampleInputPassword1">确定用户密码</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="确定用户密码">
                <label for="exampleInputPassword1">邮箱</label>
                <input type="email" class="form-control" id="exampleInputPassword2" placeholder="请输入邮箱">
                <label for="exampleInputPassword1">手机号</label>
                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="请输入手机号">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </div>
</div>
<script src="/cs/Public/Admin/js/jquery.min.js"></script>
<script src="/cs/Public/Admin/js/bootstrap.min.js"></script>
</body>
</html>