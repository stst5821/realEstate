<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>不動産業者向け 無料ホームページテンプレート tp_fudosan15</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_enqueue_script('jquery'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/openclose.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fixmenu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fixmenu_pagetop.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ddmenu_min.js"></script>
<?php wp_head(); ?>
</head>

<body>

<div id="container">

<header>
<div class="inner">
<h1 id="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="サンプル不動産"></a></h1>
<div id="tel"><span>TEL:0120-000-000</span><br>受付9:00〜18:00　水曜定休</div>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar" class="nav-fix-pos">
<ul class="inner">
<li class="current"><a href="index.html">ホーム</a></li>
<li><a href="javascript:void(0)" class="cursor-default">物件を借りる</a>
	<ul class="ddmenu">
	<li><a href="list.html">マンション・アパート</a></li>
	<li><a href="list.html">一戸建て</a></li>
	</ul>
</li>
<li><a href="javascript:void(0)" class="cursor-default">物件を買う</a>
	<ul class="ddmenu">
	<li><a href="list.html">一戸建て</a></li>
	<li><a href="list.html">マンション</a></li>
	<li><a href="list.html">土地</a></li>
	</ul>
</li>
<li><a href="investment.html">売る・投資</a></li>
<li><a href="contact.html">お問い合わせ</a></li>
</ul>
</nav>

<!--小さい端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul class="inner">
<li><a href="index.html">ホーム</a></li>
<li id="menubar_hdr2" class="close">物件を借りる
	<ul id="menubar-s2">
	<li><a href="list.html">マンション・アパート</a></li>
	<li><a href="list.html">一戸建て</a></li>
	</ul>
</li>
<li id="menubar_hdr3" class="close">物件を買う
	<ul id="menubar-s3">
	<li><a href="list.html">一戸建て</a></li>
	<li><a href="list.html">マンション</a></li>
	<li><a href="list.html">土地</a></li>
	</ul>
</li>
<li><a href="investment.html">売る・投資</a></li>
<li><a href="contact.html">お問い合わせ</a></li>
</ul>
</nav>
