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
<div class="new-home">
	<section class="heading text-center white-background">
		<div class="row">
			<div class="small-12-columns">
				<h1>Kathryn Janicek</h1>
				<h2>Media Strategy & Public Speaking Coach</h2>
				<h2>"Making You The Best Version Of Yourself"</h2>
			</div>
		</div>
	</section>
	<section class="info text-center white-background">
		<div class="row">
			<div class="small-12 columns">
				
			</div>
		</div>
	</section>
	<section class="social-numbers text-center white-background">
		<div class="row">
			<div class="small-6 medium-3 columns">
				<div class="social-wrapper facebook">
					<i class="fa fa-facebook-square"></i>
					<p>1.3k Likes</p>
				</div>
			</div>
			<div class="small-6 medium-3 columns">
				<div class="social-wrapper twitter"><i class="fa fa-twitter-square"></i>
					<p>1000 Followers</p>
				</div>
			</div>
			<div class="small-6 medium-3 columns">
				<div class="social-wrapper instagram"><i class="fa fa-instagram"></i>
					<p>1000 Followers</p>
				</div>
			</div>
			<div class="small-6 medium-3 columns">
				<div class="social-wrapper pinterest">
					<i class="fa fa-pinterest-square"></i>
					<p>1000 Followers</p>
				</div>
			</div>
		</div>
	</section>
	<section class="background white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Kathryn's Background</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores suscipit laudantium libero impedit dicta eius ipsum? Quam deleniti labore aspernatur, minus recusandae quibusdam modi excepturi, ab veritatis cupiditate tenetur nulla?</p>
				<p>Voluptatem id cupiditate in hic molestiae quos sunt adipisci rerum distinctio voluptates quisquam asperiores a tempora dicta ea inventore obcaecati odit dolor ab deserunt commodi laboriosam, sapiente at! Natus, neque!</p>
				<p>Suscipit maiores delectus quam optio explicabo doloremque temporibus ad! Error ea eum ipsam eius fugit. Quasi consequatur rerum vel sequi sit, provident modi repudiandae voluptates, saepe dicta error ex delectus!</p>
			</div>
		</div>
	</section>

	<section class="testimonials white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Testimonials</h4>
				<hr>
			</div>
			<div class="small-12 columns">
				<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum distinctio, temporibus magni nam! Eum laboriosam eos perferendis sunt officiis repellat, esse fuga. Dolores eos, nihil ipsum itaque, ab corporis praesentium.<cite>Lorem Ipsum</cite></blockquote>
				<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum distinctio, temporibus magni nam! Eum laboriosam eos perferendis sunt officiis repellat, esse fuga. Dolores eos, nihil ipsum itaque, ab corporis praesentium.<cite>Lorem Ipsum</cite></blockquote>
				<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum distinctio, temporibus magni nam! Eum laboriosam eos perferendis sunt officiis repellat, esse fuga. Dolores eos, nihil ipsum itaque, ab corporis praesentium.<cite>Lorem Ipsum</cite></blockquote>
			</div>
		</div>
	</section>

	<section class="coaching white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Media Coaching</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea reprehenderit, obcaecati ex iure aliquid, quod odit voluptas laudantium quasi necessitatibus cumque qui facere aut veniam nostrum mollitia quos cum aspernatur!</p>
			</div>
		</div>
	</section>

	<section class="training white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Exec Speech Training</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam necessitatibus quia adipisci quam fugiat. Inventore tenetur placeat fugit repellendus impedit eligendi sed ullam, alias, provident, sunt laborum doloremque laboriosam quasi?</p>
			</div>
		</div>
	</section>

	<section class="ted white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Get TED Ready</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores nihil reiciendis accusamus mollitia deserunt consequatur necessitatibus dicta minima, minus placeat facere aliquid quidem harum incidunt obcaecati quas rem praesentium quae!</p>
			</div>
		</div>
	</section>

	<section class="intern white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Intern with Intention</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugit est molestiae sapiente dolorem laborum eveniet ad magnam illo dolore, nulla. Numquam illum nobis fuga, dicta consequuntur magnam sequi id?</p>
			</div>
		</div>
	</section>

	<section class="book white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Book Me</h4>
				<hr>
			</div>
		</div>
	</section>

	<section class="featured white-background">
		<div class="row">
			<div class="small-12 columns">
				<h4 class="section-title">Where Kathryn's Work Has Been Featured</h4>
				<hr>
			</div>
		</div>
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



	<section class="recent-posts white-background">
		<div class="row">
			<h4 class="text-center section-title">Recent Posts</h4>
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
	</section></div>

	<?php get_template_part( 'template-parts/menu-footer' ); ?>



	<?php get_footer(); ?>
