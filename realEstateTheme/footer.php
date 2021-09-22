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
<script src="<?php echo get_template_directory_uri(); ?>/js/imgchg_pack.js"></script>
<script>
imgchg_start('item_image1', 'item_image2', 'thumbnail', 'imgcaption', 0);
</script>
<?php wp_footer(); ?>
</body>
</html>
