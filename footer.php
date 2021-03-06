<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Battery_Apollo
 */

?>
	</div><!-- #content -->

	<footer>
		<div class="container">
			<div class="row clearfix">
	 <?php
/* The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if (!is_active_sidebar('first-footer-widget-area')
	&& !is_active_sidebar('second-footer-widget-area')
	&& !is_active_sidebar('third-footer-widget-area')
	&& !is_active_sidebar('fourth-footer-widget-area')
) {
	return;
}

if (is_active_sidebar('first-footer-widget-area')
	&& is_active_sidebar('second-footer-widget-area')
	&& is_active_sidebar('third-footer-widget-area')
	&& is_active_sidebar('fourth-footer-widget-area')
): ?>

<!-- <aside class="fatfooter" role="complementary"> -->
    <div class="first quarter left widget-area">
        <?php dynamic_sidebar('first-footer-widget-area');?>
    </div><!-- .first .widget-area -->

    <div class="second quarter widget-area">
        <?php dynamic_sidebar('second-footer-widget-area');?>
    </div><!-- .second .widget-area -->

    <div class="third quarter widget-area">
        <?php dynamic_sidebar('third-footer-widget-area');?>
    </div><!-- .third .widget-area -->

    <div class="fourth quarter right widget-area">
        <?php dynamic_sidebar('fourth-footer-widget-area');?>
    </div><!-- .fourth .widget-area -->
<!-- </aside>#fatfooter -->

<?php
elseif (is_active_sidebar('first-footer-widget-area')
	&& is_active_sidebar('second-footer-widget-area')
	&& is_active_sidebar('third-footer-widget-area')
	&& !is_active_sidebar('fourth-footer-widget-area')
): ?>
<aside class="fatfooter" role="complementary">
    <div class="first one-third left widget-area">
        <?php dynamic_sidebar('first-footer-widget-area');?>
    </div><!-- .first .widget-area -->

    <div class="second one-third widget-area">
        <?php dynamic_sidebar('second-footer-widget-area');?>
    </div><!-- .second .widget-area -->

    <div class="third one-third right widget-area">
        <?php dynamic_sidebar('third-footer-widget-area');?>
    </div><!-- .third .widget-area -->

</aside><!-- #fatfooter -->

<?php
elseif (is_active_sidebar('first-footer-widget-area')
	&& is_active_sidebar('second-footer-widget-area')
	&& !is_active_sidebar('third-footer-widget-area')
	&& !is_active_sidebar('fourth-footer-widget-area')
): ?>
<aside class="fatfooter" role="complementary">
    <div class="first half left widget-area">
        <?php dynamic_sidebar('first-footer-widget-area');?>
    </div><!-- .first .widget-area -->

    <div class="second half right widget-area">
        <?php dynamic_sidebar('second-footer-widget-area');?>
    </div><!-- .second .widget-area -->

</aside><!-- #fatfooter -->

<?php
elseif (is_active_sidebar('first-footer-widget-area')
	&& !is_active_sidebar('second-footer-widget-area')
	&& !is_active_sidebar('third-footer-widget-area')
	&& !is_active_sidebar('fourth-footer-widget-area')
):
?>


<aside class="fatfooter" role="complementary">
    <div class="first full-width widget-area">
        <?php dynamic_sidebar('first-footer-widget-area');?>
    </div><!-- .first .widget-area -->

</aside><!-- #fatfooter -->

<?php endif;?>
</div>
<?php
if (!is_active_sidebar('fifth-footer-widget-area')
	&& !is_active_sidebar('sixth-footer-widget-area')
	&& !is_active_sidebar('seventh-footer-widget-area')
) {
	return;
}

if (is_active_sidebar('fifth-footer-widget-area')
	&& is_active_sidebar('sixth-footer-widget-area')
	&& is_active_sidebar('seventh-footer-widget-area')
): ?>

	<div class="row clearfix footer-bottom">
	    <div class="fifth col-md-3">
	        <?php dynamic_sidebar('fifth-footer-widget-area');?>
	    </div><!-- .fifth .widget-area -->


	    <div class="sixth col-md-6">
	        <?php dynamic_sidebar('sixth-footer-widget-area');?>
	    </div><!-- .sixth .widget-area -->

	    <div class="seventh col-md-3">
	        <?php dynamic_sidebar('seventh-footer-widget-area');?>
	    </div><!-- .seventh .widget-area -->

	</div>
	<?php endif;?>
	</div>
	</footer><!-- #colophon -->
	<div class="row clearfix footer-copyright">
		<div class="col-md-12 text-center">
			Bản quyền thuộc về Công ty TNHH Nguồn dự phòng Apollo Việt Nam
		</div>
	</div>

</div><!-- wrapper -->
<?php wp_footer();?>

</body>
</html>
