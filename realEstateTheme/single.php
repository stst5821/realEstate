<?php get_header(); ?>
<div id="contents">
<div class="inner">
<div id="main">
<article>

<h2>物件詳細</h2>

<?php 
	if ( have_posts() ) :
			while ( have_posts() ) : the_post();
	?>
	<figure id="item-image" class="mb20">
	<img src="<?php the_field('物件画像1'); ?>" alt="写真の説明を入れます" id="item_image1" style="opacity: 1;">
	<img src="<?php the_field('物件画像1'); ?>" alt="写真の説明を入れます" id="item_image2" style="left: 0px; top: 0px;">
	<p id="imgcaption">詳細画像１の説明文をここに入れます</p>
	</figure>

	<p class="c">
		<img src="<?php the_field('物件画像1'); ?>" alt="詳細画像1の説明文をここに入れます" class="thumbnail">
		<img src="<?php the_field('物件画像2'); ?>" alt="詳細画像2の説明文をここに入れます" class="thumbnail">
		<img src="<?php the_field('物件画像3'); ?>" alt="詳細画像3の説明文をここに入れます" class="thumbnail">
		<img src="<?php the_field('物件画像4'); ?>" alt="詳細画像4の説明文をここに入れます" class="thumbnail">
		<img src="<?php the_field('物件画像5'); ?>" alt="詳細画像5の説明文をここに入れます" class="thumbnail">
	</p>

<table class="ta1">
<caption><?php the_title(); ?></caption>
<tr>
<th>住所</th>
<td><?php the_field('住所'); ?></td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
</table>

<p class="c">
<input type="submit" value="この物件に問い合わせをする" class="btn">
</p>
</article>
<p class="mb30"><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>
<section>

<?php 
		endwhile;
endif;
?>

<h3>イメージチェンジプログラム（imgchg_pack.js）の使い方</h3>
<p>サムネイル画像をクリックすると、上の大きな写真が入れ替わります。</p>
<p>html側を見れば分かりますが、大きな画像の読みこみ行は<strong>２行</strong>あります。違う点はidの指定名が異なるだけですが必ず２行入れて下さい。この２枚の画像と、サムネイルの１枚目の画像名は合わせておいて下さい。</p>
<p>サムネイルを増やしたい場合はhtml側のサムネイルの行をコピペで増やし、画像ファイル名やalt指定（今回の場合は大きな写真下に表示される説明文になります）を入れ替えて下さい。</p>
<p><strong>サムネイルと拡大画像は兼用</strong>です。<strong>画像の縦横比率はすべて統一</strong>しておいた方がきれいに入れ替わります。※中央の画像だけ、わざと寸法を変更しています。<br>
サムネイルのサイズはcssフォルダのstyle.cssの「.thumbnail」のwidthとheightの値で変更できます。<br>
画像は、コンテンツ幅より小さい画像だと表示に問題が出るのでできるだけ<strong>大きな画像</strong>を用意しておいて下さい。<br>
imgchg_pack.jsはhtmlの下の方に読み込んでいます。別のページで使う場合はコピーするのを忘れずに。</p>

</section>

</div>
<!--/#main-->

<div id="sub">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>