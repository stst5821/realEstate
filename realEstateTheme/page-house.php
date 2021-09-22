<?php get_header(); ?>

<div id="contents">
<div class="inner">
<div id="main">

<section>

<h2>物件一覧page-houseページサンプル</h2>
<h3>「１列タイプ」の出力例</h3>
<div class="list">


<?php
  $args = array(
    'posts_per_page' => 5 // 表示件数の指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>

<h1>記事一覧</h1>
	<hr>
<a href="<?php echo get_permalink(); ?>">
	<figure><img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="写真の説明"></figure>
	<h4><?php the_title(); ?></h4>
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
	<span class="date"><?php the_time('Y年n月j日'); ?></span>
	</a>
<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</div>

</section>

</div>
<!--/#main-->

<div id="sub">
<?php get_sidebar(); ?>
</div>
<!--/#sub-->

</div>
<!--/.inner-->

</div>
<!--/#contents-->
<?php get_footer(); ?>