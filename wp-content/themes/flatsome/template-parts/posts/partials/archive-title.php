<?php
/**
 * Post archive title.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<header class="archive-page-header">
	<div class="row">
	<div class="large-8 text-center col">
	<h1 class="page-title is-large uppercase">
		<?php

			if ( is_category() ) :
				printf( __( '%s', 'flatsome' ), '<span>' . single_cat_title( '', false ) . '</span>' );

			elseif ( is_tag() ) :
				printf( __( 'Tag Archives: %s', 'flatsome' ), '<span>' . single_tag_title( '', false ) . '</span>' );

			elseif ( is_search() ) :
				printf( __( 'Search Results for: %s', 'flatsome' ), '<span>' . get_search_query() . '</span>' );

			elseif ( is_author() ) :
				/* Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				*/
				the_post();
				printf( __( 'Tác giả: %s', 'flatsome' ), '<span class="vcard">' . get_the_author() . '</span>' );
				/* Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();

			elseif ( is_day() ) :
				printf( __( 'Daily Archives: %s', 'flatsome' ), '<span>' . get_the_date() . '</span>' );

			elseif ( is_month() ) :
				printf( __( 'Monthly Archives: %s', 'flatsome' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

			elseif ( is_year() ) :
				printf( __( 'Yearly Archives: %s', 'flatsome' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

			elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
				_e( 'Asides', 'flatsome' );

			elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
				_e( 'Images', 'flatsome');

			elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
				_e( 'Videos', 'flatsome' );

			elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
				_e( 'Quotes', 'flatsome' );

			elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
				_e( 'Links', 'flatsome' );

			else :
				_e( '', 'flatsome' );

			endif;
		?>
	</h1>
		
	<?php
		if ( is_category() ) :
			// show an optional category description
			$category_description = category_description();
			if ( ! empty( $category_description ) ) :
				echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );
			endif;

		elseif ( is_tag() ) :
			// show an optional tag description
			$tag_description = tag_description();
			if ( ! empty( $tag_description ) ) :
				echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
			endif;

		endif;
	?>
		<?php if( is_author() ){
// Lấy thông tin tác giả bài viết
$author_id = get_the_author_meta('ID');
// Lấy giá trị của trường tùy chỉnh 'phone' của tác giả
$chuc_danh = get_the_author_meta('chuc_danh', $author_id);
$chuyen_mon = get_the_author_meta('chuyen_mon', $author_id);
$kinh_nghiem = get_the_author_meta('kinh_nghiem', $author_id);
// Hiển thị giá trị trường tùy chỉnh 'phone' của tác giả
echo '<div class="row-info">';
echo '<span class="chuc-danh"><i class="fa fa-user" aria-hidden="true"></i>';
	echo $chuc_danh;
echo '</span>';
echo '<span class="kinh-nghiem"><i class="fa fa-clock-o" aria-hidden="true"></i>';
echo $kinh_nghiem;
echo ' năm kinh nghiệm </span>';
echo '<span class="chuyen-mon"><i class="fa fa-flag" aria-hidden="true"></i> Chuyên môn: ';
	echo $chuyen_mon;
echo '</span>';
echo '</div>';
}?>
	</div>
	</div>
</header>
