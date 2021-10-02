<?php get_header(); ?>

<div id="contents">
<div class="inner">
<div id="main">

<section>

<h2>物件一覧categoryページ</h2>
<div class="list">

<h1><?php single_cat_title() ?></h1>
<hr>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

<a href="<?php the_permalink(); ?>">
	<figure><img src="<?php the_field('物件画像1'); ?>" alt="写真の説明"></figure>
	<h4><?php the_title(); ?></h4>
	<table>
		<tr>
		<th>所在地</th>
		<td><?php the_field('住所'); ?></td>
		<th>価格</th>
		<td>XXXX円</td>
		</tr>
		<tr>
		<th>見出し</th>
		<td>****</td>
		<th>見出し</th>
		<td>****</td>
		</tr>
	</table>
	<span class="date"><?php the_time('Y年n月j日'); ?></span>
	</a>

	<?php endwhile;?>
<?php endif; ?>
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