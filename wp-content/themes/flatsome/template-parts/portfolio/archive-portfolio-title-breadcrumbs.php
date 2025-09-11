<?php
/**
 * Portfolio archive title with breadcrumbs.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<div class="page-title normal-title">
	<div class="page-title-inner container flex-row medium-flex-wrap medium-text-center">
	 	<div class="large-12 col">
			<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
	 		<h1 class="entry-title is-larger uppercase pb-0 pt-0 mb-0">
	 			<?php echo the_title(); ?>
			</h1>
			
	 	</div>	 	
	</div>
</div>
