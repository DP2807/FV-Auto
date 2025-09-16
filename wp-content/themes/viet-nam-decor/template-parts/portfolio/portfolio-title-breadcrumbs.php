<?php
/**
 * Portfolio title breadcrumbs.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<div class="row row-small tieu-de-port">
	<div class="col large-12">
		<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
	 		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>	
	<div class="col large-8">
		<?php
if (has_post_thumbnail()) {
    $thumbnail_url = get_the_post_thumbnail_url();
    echo '<img src="' . esc_url($thumbnail_url) . '" />';
}
?>
	</div>
	<div class="col large-4">
		<?php $dia_chi=get_field('dia_chi');
		 $khach_hang=get_field('khach_hang');
		 $so_phong_ngu=get_field('so_phong_ngu');
		 $khach_hang=get_field('khach_hang');
		 $phong_cach=get_field('phong_cach');
		 $dien_tich=get_field('dien_tich');
		$hang_muc_thi_cong=get_field('hang_muc_thi_cong');
		$link_cataloge=get_field('link_cataloge');
		?>
		<ul>
			<li><span class="label">Tên sản phẩm:</span> <?php the_title(); ?></li>
				
		</ul>
		<?php if($link_cataloge){?>
		<a class="nut-cataloge" href="<?php echo $link_cataloge;?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Xem dự án với chất lượng HD</a>
		<?php }?>
		<div class="khuyen-mai-box">
			<h3>
				Liên hệ ngay để được tư vấn chi tiết
			</h3>
			<?php echo do_shortcode('[contact-form-7 id="794" title="Form liên hệ 1"]');?>
		</div>
	</div>
</div>
