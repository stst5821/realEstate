<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>不動産業者向け 無料ホームページテンプレート tp_fudosan15</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script src="js/openclose.js"></script>
<script src="js/fixmenu.js"></script>
<script src="js/fixmenu_pagetop.js"></script>
<script src="js/ddmenu_min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div id="container">

<header>
<div class="inner">
<h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="サンプル不動産"></a></h1>
<div id="tel"><span>TEL:0120-000-000</span><br>受付9:00〜18:00　水曜定休</div>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar" class="nav-fix-pos">
<ul class="inner">
<li><a href="index.html">ホーム</a></li>
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

<div id="contents">

<div class="inner">

<div id="main">

<section>

<h2>物件一覧ページサンプル</h2>

<h3>「１列タイプ」の出力例</h3>

<div class="list">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル<span class="newicon">NEW</span></h4>
<table>
<tr>
<th>所在地</th>
<td>東京都XXXX</td>
<th>価格</th>
<td>XXXX円</td>
</tr>
<tr>
<th>見出し</th>
<td>サンプルテキスト。</td>
<th>見出し</th>
<td>サンプルテキスト。</td>
</tr>
</table>
<span class="date">【登録日:20XX/XX/XX】【更新日:20XX/XX/XX】</span>
</a>
</div>

<div class="list">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル <span class="option3">キャンペーン中</span></h4>
<table>
<tr>
<th>所在地</th>
<td>東京都XXXX</td>
<th>価格</th>
<td>XXXX円</td>
</tr>
<tr>
<th>見出し</th>
<td>サンプルテキスト。</td>
<th>見出し</th>
<td>サンプルテキスト。</td>
</tr>
</table>
<p>左上の「おすすめ」の文字情報はhtml側で直接変更できます。
<span class="option1">おすすめ</span><br>
<span style="color:red">&lt;span class=&quot;option1&quot;&gt;おすすめ&lt;/span&gt;</span><br>
色はcssフォルダのstyle.cssの設定で変更できます。<br>
※下のコンパクトレイアウトも同じ使い方ができます。</p>
<span class="date">【登録日:20XX/XX/XX】【更新日:20XX/XX/XX】</span>
<span class="option1">おすすめ</span>
</a>
</div>

<div class="list option2">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<table>
<tr>
<th>所在地</th>
<td>東京都XXXX</td>
<th>価格</th>
<td>XXXX円</td>
</tr>
<tr>
<th>見出し</th>
<td>サンプルテキスト。</td>
<th>見出し</th>
<td>サンプルテキスト。</td>
</tr>
</table>
<p>左上の「ご契約済」の文字情報はhtml側で直接変更できます。
<span class="option2">ご契約済</span><br>
<span style="color:red">&lt;span class=&quot;option2&quot;&gt;ご契約済&lt;/span&gt;</span><br>
色はcssフォルダのstyle.cssの設定で変更できます。<br>
また、画像を半透明にするには、<br>
&lt;div class=&quot;list <span style="color:red">option2</span>&quot;&gt;<br>
として下さい。<br>
※下のコンパクトレイアウトも同じ使い方ができます。</p>
<span class="date">【登録日:20XX/XX/XX】【更新日:20XX/XX/XX】</span>
<span class="option2">ご契約済</span>
</a>
</div>

<h3>「コンパクトタイプ」の出力例</h3>
<p>上の横長レイアウトは&lt;div class=&quot;list&quot;&gt;ですが、&lt;div class=&quot;list <span style="color:red">compact</span>&quot;&gt;にするとこのようにコンパクトボックスになります。html構成はそれぞれ異なります。</p>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル<span class="newicon">NEW</span></h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
<span class="option1">おすすめ</span>
</a>
</div>

<div class="list compact option2">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
<span class="option2">ご契約済</span>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>文字を詰め込みすぎないで下さい。詰め込みすぎて入りきらない分は非表示になりますのでご注意下さい。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list compact">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

</section>

</div>
<!--/#main-->

<div id="sub">

<aside class="mb15">
<img src="images/banner_sub.jpg" alt="" class="pc">
<img src="images/banner_sub_s.jpg" alt="" class="sh">
↑端末サイズで表示される画像が切り替わります。<br>
「class=&quot;pc&quot;」は801px以上で表示させる画像、「class=&quot;sh&quot;」は800px以下で表示させる画像です。
</aside>

<section class="box">

<h2 class="c">おすすめ物件情報</h2>

<div class="list">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>物件タイトル<span class="newicon">NEW</span></h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

<div class="list">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>物件タイトル</h4>
<p>所在地：東京都XXXX<br>
価格：XXXXX円</p>
</a>
</div>

</section>

<nav class="box">
<ul class="submenu">
<li><a href="index.html">ホーム</a></li>
<li><a href="company.html">会社概要</a></li>
<li><a href="contact.html">お問い合わせ</a></li>
</ul>
</nav>

<section class="box">
<h2>運営</h2>
<p><strong>サンプル不動産</strong><br>
<span class="mini1">東京都XX区XXXXビル3F<br>
TEL:03-0000-0000<br>
(AM9:00〜PM5:00 水曜休み)</span></p>
<aside class="pc"><img src="images/banner_company.jpg" alt=""></aside>
</section>

</div>
<!--/#sub-->

</div>
<!--/.inner-->

</div>
<!--/#contents-->

<footer>

<div id="footermenu" class="inner">
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>
</div>
<!--/#footermenu-->

<div id="copyright">
<small>Copyright&copy; <a href="index.html">サンプル不動産</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</div>
<!--/#copyright-->

</footer>

</div>
<!--/#container-->

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　800px以下-->
<script>
if (OCwindowWidth() <= 800) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--「物件を借りる」の子メニュー-->
<script>
if (OCwindowWidth() <= 800) {
	open_close("menubar_hdr2", "menubar-s2");
}
</script>

<!--「物件を買う」の子メニュー-->
<script>
if (OCwindowWidth() <= 800) {
	open_close("menubar_hdr3", "menubar-s3");
}
</script>

</body>
</html>
