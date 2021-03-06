<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/Public/Admin/img/ooopic_1507533377.ico">
    <title>CS装备库</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public/Admin/css/bootstrap.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/docs.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/two.css" rel="stylesheet">
    <!--<link href="/Public/Admin/css/style.css" rel="stylesheet"/>-->
    <!--[if lt IE 9]>-->
    <script src="/Public/Admin/js/html5shiv.min.js"></script>
    <script src="/Public/Admin/js/respond.min.js"></script>
    <style>
        body{
            background: #2d2d2d;
            background-image: url("/Public/Admin/img/55_104512_9489.jpg");
            width: 100%;
            height: 898px;
            background-size: cover;
        }
        html{cursor: url('/Public/Admin/shubiao/link1.cur'),default;}
        a:hover{cursor: url('/Public/Admin/shubiao/link2.cur'),default;}

        .modal.in .modal-dialog{
            padding-top: 86px;
        }
        .modal-bodyi{color: #000;text-align: center;padding: 2px;}
        a{color: #ff5707;}

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
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mylog">
                    注册
                </button>
            </ul>
        </nav>
    </div>
</header>
<!-- 登录 -->
<form action="/index.php/Admin/Test/zl" method="post">
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
            <form class="modal-body" action="/index.php/Admin/Test/zc" method="post">
            <div class="modal-body">
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
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div style="margin: auto;padding-top: 149px;">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">所有武器</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab1" data-toggle="tab">重型武器</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab2" data-toggle="tab">手枪</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab3" data-toggle="tab">步枪</a></li>
        <li role="presentation"><a href="#weixing" aria-controls="weixing" role="tab4" data-toggle="tab">微型冲锋枪</a></li>
        <li role="presentation"><a href="#bishou" aria-controls="bishou" role="tab5" data-toggle="tab">匕首</a></li>
        <li role="presentation"><a href="#touzhi" aria-controls="touzhi" role="tab6" data-toggle="tab">投掷物</a></li>
        <li role="presentation"><a href="#ditu" aria-controls="ditu" role="tab7" data-toggle="tab">地图中心</a></li>
    </ul>

    <!--所有武器-->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png"></a>
        </div>
        <!-- 所有武器介绍 -->
        <div class="modal fade" id="myMod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">超新星 双阵营</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/XR2AST7ST{W52EA9X{FDSR9.png">
                        <br/>费用: $1200<br/>弹药： 8/32<br/>击杀奖励： 300%<br/>名称：NOVA<br/>武器所属：双阵营<br/>
                        伤害：243<br/>容弹量：8/32<br/>护甲穿透力：50%<br/>优点：近战威力大、便宜<br/>缺点：换弹慢、伤害衰减大
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--重型武器-->
        <div role="tabpanel" class="tab-pane" id="profile">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png"></a>
        </div>
        <!--重型武器介绍-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">MAG_7 CT</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/2A]21LEER~7S)61DE{WSU@K.png">
                        <br/>费用: $1800<br/>弹药： 5/32<br/>击杀奖励： 300%<br/>名称：Mag-7<br/>武器所属：CT阵营<br/>
                        伤害：240<br/>容弹量：5/32<br/>护甲穿透力：75%<br/>优点：弹仓式装弹、近距离威力大<br/>缺点：伤害衰减大、价格贵、子弹少
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--手枪-->
        <div role="tabpanel" class="tab-pane" id="messages">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMos"><img src="/Public/Admin/img/TPU6ZGH.png"></a>
        </div>
        <!--手枪介绍-->
        <div class="modal fade" id="myMos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">双持贝瑞塔 双阵营</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/TPU6ZGH.png">
                        <br/>费用: $500<br/>弹药： 30/120<br/>击杀奖励： 默认<br/>名称：Berettas<br/>武器所属：T专用<br/>
                        伤害：38<br/>容弹量：30/120<br/>护甲穿透力：52<br/>优点子弹多、射速快<br/>缺点伤害低、换弹时间慢
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--步枪-->
        <div role="tabpanel" class="tab-pane" id="settings">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMof"><img src="/Public/Admin/img/M4A1.png"></a>
        </div>
        <!--步枪介绍-->
        <div class="modal fade" id="myMof" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">M4A1消音版 CT</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/M4A1.png">
                        <br/>费用: $500<br/>弹药： 30/120<br/>击杀奖励： 默认<br/>名称：Berettas<br/>武器所属：T专用<br/>
                        伤害：38<br/>容弹量：30/120<br/>护甲穿透力：52<br/>优点子弹多、射速快<br/>缺点伤害低、换弹时间慢
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--微型冲锋枪-->
        <div role="tabpanel" class="tab-pane" id="weixing">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMog"><img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png"></a>
        </div>
        <!--微型冲锋枪介绍-->
        <div class="modal fade" id="myMog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">MP9 CT</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/77W85I)DY{`[G_2HUX[(NBO.png">
                        <br/>费用: $500<br/>弹药： 30/120<br/>击杀奖励： 默认<br/>名称：Berettas<br/>武器所属：T专用<br/>
                        伤害：38<br/>容弹量：30/120<br/>护甲穿透力：52<br/>优点子弹多、射速快<br/>缺点伤害低、换弹时间慢
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--匕首-->
        <div role="tabpanel" class="tab-pane" id="bishou">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoh"><img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png"></a>
        </div>
        <!--匕首介绍-->
        <div class="modal fade" id="myMoh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">反恐精英匕首</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/PGZDH8CFT6D[VPA8DAH~(]G.png">
                        <br/>永久可用，杀人于悄无声息之中。主要攻击（鼠标左键）出手速度快但伤害较低，次要攻击（鼠标右键）
                        出手速度较慢但伤害较高。对敌人背刺能使玩家在悄无声息中造成“秒杀”，使用匕首击杀将获得1500的金钱奖励。
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--投掷物-->
        <div role="tabpanel" class="tab-pane" id="touzhi">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoj"><img src="/Public/Admin/img/4FfGNbqGqqm.png"></a>
        </div>
        <!--投掷物介绍-->
        <div class="modal fade" id="myMoj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">诱饵手雷</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/4FfGNbqGqqm.png">
                        <br/>费用：$50<br/>一个干扰型武器，能模仿枪械的开火声音。
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--地图-->
        <div role="tabpanel" class="tab-pane" id="ditu">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMok"><img src="/Public/Admin/img/9k=.jpg"></a>
        </div>
        <!--地图介绍-->
        <div class="modal fade" id="myMok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">炼狱小镇</h4>
                    </div>
                    <div class="modal-bodyi">
                        <img src="/Public/Admin/img/9k=.jpg" style="width: 560px;">
                        <br/>炼狱小镇是炸弹地图场景。在炼狱小镇中，T要尝试炸毁两个通过小镇且关键的天然气管道，而CT则需要阻止他们毁坏输气管道。
                        这个版本的地图上有一些视觉上的改进，但没有太大的变化。地图中可以看到干草堆和鱼塘，同时也加入了核燃料桶。天空也进行了类似于CT1.0的调整。
                        炼狱小镇的CT原型来自英国特种空勤团，T原型来自分裂分子。
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/Public/Admin/js/jquery.min.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
</body>
</html>