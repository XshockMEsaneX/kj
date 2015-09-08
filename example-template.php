<?php /* Template Name: Example Template */ ?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kj
 */

get_header(); ?>
<style>
	.fa {
		font-size: 64px;
	}
	.featured .row {
		margin-bottom: 30px;
	}
</style>

<?php get_template_part( 'template-parts/menu-header' ); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else:
    // no posts found
endif;
?>
		<section class="text-center">
			<img src="<?php echo get_template_directory_uri() . '/img/KJlogo.jpg' ?>" alt="" style="max-height: 94vh; width: auto;">
		</section>


		<section class="social-numbers text-center" style="margin-top:50px;">
			<h1 class="text-center">Social Media</h1>
			<div class="row">
				<div class="small-6 medium-3 columns">
					<i class="fa fa-facebook-square"></i>
					<p>1.3k Likes</p>
				</div>
				<div class="small-6 medium-3 columns">
				<i class="fa fa-twitter-square"></i>
					<p>1000 Followers</p>
				</div>
				<div class="small-6 medium-3 columns">
				<i class="fa fa-instagram"></i>
					<p>1000 Followers</p>
				</div>
				<div class="small-6 medium-3 columns">
				<i class="fa fa-pinterest-square"></i>
					<p>1000 Followers</p>
				</div>
			</div>
		</section>

		<section class="featured">
			<h1 class="text-center">Where Kathryn's Work Has Been Featured</h1>
			<div class="row">
				<div class="medium-4 columns"><img src="//placehold.it/300x300&text=Feature Image" alt=""></div>
				<div class="medium-8 columns"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat itaque similique rerum facere voluptas nostrum aliquam atque deserunt, tempore perferendis harum sed minus. Maxime id ut consectetur ipsa, reprehenderit, consequuntur.</p></div>
			</div>
			<div class="row">
				<div class="medium-4 columns"><img src="//placehold.it/300x300&text=Feature Image" alt=""></div>
				<div class="medium-8 columns"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat itaque similique rerum facere voluptas nostrum aliquam atque deserunt, tempore perferendis harum sed minus. Maxime id ut consectetur ipsa, reprehenderit, consequuntur.</p></div>
			</div>
			<div class="row">
				<div class="medium-4 columns"><img src="//placehold.it/300x300&text=Feature Image" alt=""></div>
				<div class="medium-8 columns"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat itaque similique rerum facere voluptas nostrum aliquam atque deserunt, tempore perferendis harum sed minus. Maxime id ut consectetur ipsa, reprehenderit, consequuntur.</p></div>
			</div>
		</section>

		<section class="testimonials">
			<div class="row">
				<h1 class="text-center">Testimonials</h1>
				<div class="small-12 columns">
					<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum distinctio, temporibus magni nam! Eum laboriosam eos perferendis sunt officiis repellat, esse fuga. Dolores eos, nihil ipsum itaque, ab corporis praesentium.<cite>Lorem Ipsum</cite></blockquote>
					<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum distinctio, temporibus magni nam! Eum laboriosam eos perferendis sunt officiis repellat, esse fuga. Dolores eos, nihil ipsum itaque, ab corporis praesentium.<cite>Lorem Ipsum</cite></blockquote>
					<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum distinctio, temporibus magni nam! Eum laboriosam eos perferendis sunt officiis repellat, esse fuga. Dolores eos, nihil ipsum itaque, ab corporis praesentium.<cite>Lorem Ipsum</cite></blockquote>
				</div>
			</div>
		</section>

		<section class="recent-posts">
			<div class="row">
				<h1 class="text-center">Recent Posts</h1>
				<div class="medium-4 columns">
					<div class="text-center"><img src="//placehold.it/400x400&text='Blog Image'" alt=""></div>
					<h5>Blog Title</h5>
					<h6 class="subheader">8/12/2012</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ab delectus dolore vero voluptate cupiditate, possimus expedita laboriosam id, dignissimos ratione, ut veritatis itaque, quasi quo dolorum est quis quibusdam?</p>
					<p><a href="#">Read more...</a></p>
				</div>
				<div class="medium-4 columns">
					<div class="text-center"><img src="//placehold.it/400x400&text='Blog Image'" alt=""></div>
					<h5>Blog Title</h5>
					<h6 class="subheader">8/12/2012</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ab delectus dolore vero voluptate cupiditate, possimus expedita laboriosam id, dignissimos ratione, ut veritatis itaque, quasi quo dolorum est quis quibusdam?</p>
					<p><a href="#">Read more...</a></p>
				</div>
				<div class="medium-4 columns">
					<div class="text-center"><img src="//placehold.it/400x400&text='Blog Image'" alt=""></div>
					<h5>Blog Title</h5>
					<h6 class="subheader">8/12/2012</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ab delectus dolore vero voluptate cupiditate, possimus expedita laboriosam id, dignissimos ratione, ut veritatis itaque, quasi quo dolorum est quis quibusdam?</p>
					<p><a href="#">Read more...</a></p>
				</div>
			</div>
		</section>

	<?php get_template_part( 'template-parts/menu-footer' ); ?>



<?php get_footer(); ?>
