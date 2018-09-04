<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/Public/Admin/img/ooopic_1507533377.ico">
    <title>贪玩CS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public/Admin/css/bootstrap.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/docs.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/bootstrap-theme.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="/Public/Admin/js/html5shiv.min.js"></script>
    <script src="/Public/Admin/js/respond.min.js"></script>
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
            cursor: url('/Public/Admin/shubiao/link1.cur'),default;
        }
        a:hover{cursor: url('/Public/Admin/shubiao/link2.cur'),default;}
        .bs-masthead {
            background-image: url("/Public/Admin/img/034f3fea5314b76f64d81970412f2025.jpg");
            width: 100%;
            height: 923px;
            background-size: cover;
        }
        .form-horizontal{
            max-width: 462px;
            min-width: 300px;
            margin: auto;
            margin-top: 154px;
        }
        .control-label{
            font-size: 16px;
            font-weight: bold;
            padding-right: 1px;
        }
        p{
            text-align: center;
            font-family: 'mygr';
            font-size: 44px;
        }
        @font-face {
            font-family: 'mygr';
            src: url("/Public/Admin/fonts/TTENuoJ_0.ttf");
        }
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
        </nav>
    </div>
</header>
<main class="bs-masthead" id="content" role="main">
    <form class="form-horizontal" action="/index.php/Admin/Test/xiu" method="post">
        <p>信息修改</p>
        <?php if(is_array($cs)): foreach($cs as $key=>$v): ?><div class="form-group">
            <div class="col-sm-2 control-label">账号：</div>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nc" name="name" value="<?php echo ($v["name"]); ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">密码：</div>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sfz" value="<?php echo ($v["password"]); ?>" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">确定</button>
            </div>
        </div><?php endforeach; endif; ?>
    </form>
</main>

    <script src="/Public/Admin/js/jquery.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    </body>
</html>