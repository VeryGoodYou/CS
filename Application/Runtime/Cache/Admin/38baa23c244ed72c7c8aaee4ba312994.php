<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/cs/Public/Admin/img/ooopic_1507533377.ico">
    <title>贪玩CS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/cs/Public/Admin/css/bootstrap.css" rel="stylesheet"/>
    <link href="/cs/Public/Admin/css/docs.css" rel="stylesheet" type="text/css"/>
    <link href="/cs/Public/Admin/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="/cs/Public/Admin/css/style.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="/cs/Public/Admin/js/html5shiv.min.js"></script>
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
        .bs-masthead {
            background-image: url("/cs/Public/Admin/img/55_104512_9489.jpg");
            width: 100%;
            height: 700px;
            background-size: cover;
        }
        .bs-masthead h1 {
            font-family: 'myqing';
        }
        @font-face {
            font-family: 'myqing';
            src: url("/cs/Public/Admin/fonts/TTENuoJ_0.ttf");
        }
        .table{width:0;margin: auto;}
        .wrapper{ margin:0px auto; padding:20px; border:1px solid #CCC; background:#333; width:980px; font-size:12px;}
        .carousel-control.right{
            background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(63, 0, 255, 0.5) 100%);
        }
        .carousel-control.left{
            background-image: linear-gradient(to right, rgba(63, 0, 255, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
        }
        #yin{
            text-align: center;
        }
        h2{font-family: 'mypin';}
        @font-face{font-family: 'mypin';src: url("/cs/Public/Admin/fonts/TTENuoJ_0.ttf")}
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


<!-- Page content of course! -->

<main class="bs-masthead" id="content" role="main">
    <div class="container">
        <h1>青春永不散场</h1>
        <p class="lead">青春不败，热血不散，生命不息，战斗不止。</p>
        <blockquote>
            <p><a href="index.html">全新CS：</a>人在江湖飘，哪有不挨刀。来吧！CS世界里等你的挑战.</p>
            <p>当前最新游戏更新进度：2017年10月9日</p>
        </blockquote>
        <p>
            <a href="/cs/Public/Admin/yx/CK毛哥火线V2.3.rar" class="btn btn-outline-inverse btn-lg" >下载游戏</a>
            <!-- <a href="https://github.com/twbs/bootstrap/archive/v3.0.3.zip" class="btn btn-outline-inverse btn-lg" >下载源码</a> -->
            <a href="#" class="btn btn-outline-inverse btn-lg">游戏专辑</a>
        </p>
    </div>
</main>
<!-- 登录 -->
<form  action="/cs/index.php/Admin/Test/index" method="post">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    登录
                </h4>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">用户账号</label>
                    <input type="text" class="form-control" value="" id="exampleInputEmail1" placeholder="请输入用户账号" name="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">用户密码</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入用户密码" name="password">
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
                <h4 class="modal-title">注册</h4>
            </div>
            <form class="modal-body" action="/cs/index.php/Admin/Test/zc" method="post">
                <label for="exampleInputEmail1">用户账号</label>
                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入用户账号" name="name">
                <label for="exampleInputPassword1">用户密码</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="请输入用户密码" name="password">
                <label for="exampleInputPassword1">确定用户密码</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="确定用户密码" name="password">
                <label for="exampleInputPassword1">邮箱</label>
                <input type="email" class="form-control" id="exampleInputPassword2" placeholder="请输入邮箱" name="email">
                <label for="exampleInputPassword1">手机号</label>
                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="请输入手机号" name="shouji">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--<table class="table table-hover">
    <tr>
        <td>
            <img src="/cs/Public/Admin/img/timg (1).jpg" alt="..." class="img-thumbnail">
            <div><h3><a href="#">游戏官网</a></h3></div>
        </td>
        <td>
            <img src="/cs/Public/Admin/img/timg.jpg" alt="..." class="img-thumbnail" style="height: 310px;">
        </td>
    </tr>
    <tr>
        <td>
            <img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg" alt="..." class="img-thumbnail" style="height: 327px">
        </td>
        <td>
            <img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg" alt="..." class="img-thumbnail" style="height: 327px">
        </td>
    </tr>
    <tr>
        <td>
            <img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg" alt="..." class="img-thumbnail" style="height: 364px">
        </td>
        <td>
            <h1 style="text-align: center;color: #000;padding-top: 115px;">尽情期待！！！</h1>
        </td>
    </tr>
</table>-->
<div class="row">
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg" alt="...">
        </a>
    </div>
    <div class="guan">游戏官方</div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="/cs/Public/Admin/img/timg.jpg" alt="...">
        </a>
    </div>
    <div class="you">游戏活动</div>
</div>
<div class="row">
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="/cs/Public/Admin/img/timg (1).jpg" alt="...">
        </a>
    </div>
    <div class="guan">游戏公告</div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="/cs/Public/Admin/img/u=1924092723,4212236483&fm=27&gp=0.jpg" alt="...">
        </a>
    </div>
    <div class="you">游戏版本</div>
</div>
<div class="row">
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg" alt="...">
        </a>
    </div>
    <div class="guan">游戏下载</div>
    <div class="col-xs-6 col-md-3">
        <div class="qi">尽情期待</div>
    </div>

</div>

    <h2 style="text-align: center;color: black;">代表作品：</h2>
<!--轮播图-->
<!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    &lt;!&ndash; Indicators &ndash;&gt;
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    &lt;!&ndash; Wrapper for slides &ndash;&gt;
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/cs/Public/Admin/img/4860403_155117274000_2.jpg" alt="..." style="margin: auto;width: 685px;height: 304px;">
            <div class="carousel-caption">
                CS1.5
            </div>
        </div>
        <div class="item">
            <img src="/cs/Public/Admin/img/timg.jpg" alt="..." style="margin: auto;width: 685px;height: 304px;">
            <div class="carousel-caption">
                死肥宅CS
            </div>
        </div>
        <div class="item">
            <img src="/cs/Public/Admin/img/55_104512_9489.jpg" alt="..." style="margin: auto;width: 685px;height: 304px;">
            <div class="carousel-caption">
                至尊CS
            </div>
        </div>
    </div>
    &lt;!&ndash; Controls &ndash;&gt;
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">dawdwa</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div id="yin">
<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=298 height=52 src="http://music.163.com/outchain/player?type=2&id=808981&auto=1&height=32"></iframe>
</div>-->
<marquee loop="loop" onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll">
    <ul class="zuo">
        <li><a href="#"><img src="/cs/Public/Admin/img/u=1260585801,1785176028&fm=27&gp=0.jpg"><div>2018CS</div></a></li>
        <li><a href="#"><img src="/cs/Public/Admin/img/034f3fea5314b76f64d81970412f2025.jpg"><div>2017CS</div></a></li>
        <li><a href="#"><img src="/cs/Public/Admin/img/55_104512_9489.jpg"><div>2016CS</div></a></li>
        <li><a href="#"><img src="/cs/Public/Admin/img/4860403_155117274000_2.jpg"><div>2015CS</div></a></li>
        <li><a href="#"><img src="/cs/Public/Admin/img/timg (1).jpg"><div>2014CS</div></a></li>
        <li><a href="#"><img src="/cs/Public/Admin/img/timg.jpg"><div>2013CS</div></a></li>
        <li><a href="#"><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg"><div>2012CS</div></a></li>
        <li><a href="#"><img src="/cs/Public/Admin/img/u=917443024,4064903481&fm=27&gp=0.jpg"><div>2011CS</div></a></li>
    </ul>
</marquee>
<div class="jumbotron">
    <img src="/cs/Public/Admin/img/u=3106910893,858212755&fm=27&gp=0.jpg">
    <div>
        <a href="#">关于我们</a><span>|</span>
        <a href="#">公司新闻</a><span>|</span>
        <a href="#">人才济济</a><span>|</span>
        <a href="#">商务合作</a><span>|</span>
        <a href="#">产品介绍</a><span>|</span>
        <a href="#">家长监护</a>
        <ul>
            <li>&copy;版权归谢家乐所有，不要问我问什么，厂长是我表锅</li>
            <li>ICP证：**************************************************</li>
            <li>抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</li>
            <li>地址：*********************************<span>电话:*********************</span></li>
        </ul>
    </div>
</div>
<script src="/cs/Public/Admin/js/jquery.min.js"></script>
<script src="/cs/Public/Admin/js/bootstrap.min.js"></script>
</body>
</html>