<?php
/**
 * Posts layout.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

do_action('flatsome_before_blog');
?>

<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>
		<?php if( is_author() ){?>
<div class="row row-small">
	<div class="large-12">
		<div class="thong-tin-tac-gia">			
			<?php $author_id = get_the_author_meta('ID');
			// Lấy giá trị của trường tùy chỉnh 'phone' của tác giả
			$gioi_thieu = get_the_author_meta('gioi_thieu', $author_id);
			echo '<div class="row row-small gioi-thieu-chung"><div class="large-2 col anh-dai-dien">';
echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'flatsome_author_bio_avatar_size', 'full' ) );

			echo '</div><div class="col large-10"><h3>Thông tin chung</h3>';								
			echo $gioi_thieu;
			echo '<div class="row row2 row-small"><div class="col large-6">';
			echo '<h3>Học vấn & bằng cấp</h3>';	
			$hoc_van_bang_cap = get_the_author_meta('hoc_van_bang_cap', $author_id);		
			echo $hoc_van_bang_cap;
			echo '</div><div class="col large-6">';
			echo '<h3>Quá trình công tác</h3>';
			$qua_trinh_cong_tac = get_the_author_meta('qua_trinh_cong_tac', $author_id);		
			echo $qua_trinh_cong_tac;
			echo '</div></div>';
			echo '</div></div>';
			?>
		</div>
	</div></div>
		<?php }?>
<div class="row row-small row-sub-cat">
	<div class="large-12">
		<?php 
$vnkings_cat_id = get_cat_id( single_cat_title("",false) );
// Lấy id của Danh mục hiện tại
?>
		<?php 
$categories = get_categories(
array('child_of' => $vnkings_cat_id,'hide_empty' => 0,'orderby' => 'id', 'order' => 'ASC',)); 
if(!empty($categories)){ ?>
    <ul>
        <?php foreach($categories as $cat){
        if('Uncategorized' != $cat->name){ ?>
            <li><a  href="<?php echo get_category_link($cat->term_id); ?>"  ><?php echo $cat->name; ?></a></li>
        <?php } } ?>      
    </ul>
<?php } else { ?>
    <ul>
        <li class="cat"><a href="<?php echo get_category_link($vnkings_cat_id); ?>"><?php echo get_cat_name($vnkings_cat_id); ?></a></li>
    </ul>
<?php } ?>
	</div>
</div>
<div class="row align-center">
	<div class="large-12 col">			
		
	<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>

	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(get_theme_mod('blog_style_archive', '') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style_archive', '') );
		} else{
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style', 'normal') );
		}
	?>
	</div>

</div>

<?php do_action('flatsome_after_blog');?>
<?php echo do_shortcode('[block id="call-to-action-archive"]');?>