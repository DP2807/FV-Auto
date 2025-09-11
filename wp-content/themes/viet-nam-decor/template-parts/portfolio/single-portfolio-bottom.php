<?php
/**
 * Portfolio single bottom.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_template_part('template-parts/portfolio/portfolio-title', flatsome_option('portfolio_title'));
?>
<div class="portfolio-top">
	<div class="row page-wrapper">

	<div id="portfolio-content" class="large-10 col"  role="main">
		<div class="portfolio-inner">
			<h2>
				Thông tin chi tiết
			</h2>
			<?php get_template_part('template-parts/portfolio/portfolio-content'); ?>
		</div>
		<div class="blog-share text-center">
			<div class="is-divider medium"></div><span class="des">Chia sẻ bài viết trên:</span>
			<?php echo do_shortcode( '[share]' );?>
		</div>		
<div class="entry-author author-box">
		<div class="flex-row align-top">
			<div class="flex-col mr circle">
				<div class="blog-author-image">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'flatsome_author_bio_avatar_size', 90 ) ); ?>
				</div>
			</div>
			<div class="flex-col flex-grow">
				<?php $author_id = get_the_author_meta('ID');
$author_url = get_author_posts_url( $author_id );?>
				<h5 class="author-name uppercase pt-half">
					<a href="<?php echo $author_url;?>"><?php the_author_meta( 'display_name' ); ?></a>
				</h5>
				<p class="author-desc small">
					<?php
// Lấy thông tin tác giả bài viết
$author_id = get_the_author_meta('ID');

// Lấy giá trị của trường tùy chỉnh 'phone' của tác giả
$gioi_thieu_chung = get_the_author_meta('gioi_thieu', $author_id);

// Hiển thị giá trị trường tùy chỉnh 'phone' của tác giả
echo $gioi_thieu_chung;
?>
				</p>
				<a class="xem-them" target="blank" href="<?php echo $author_url;?>">Xem chi tiết</a>
			</div>
		</div>
	</div>

	</div>

	</div>
</div>
<div class="portfolio-bottom">
	<div class="container">
		<h2>
		Dự án nổi bật khác
	</h2>
	</div>	
	<?php get_template_part('template-parts/portfolio/portfolio-related'); ?>
</div>
<?php echo do_shortcode('[block id="call-to-action"]');?>

