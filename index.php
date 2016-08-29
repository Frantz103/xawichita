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
 * @package xawichita
 */

get_header(); ?>
<div id="content" class="container-fuild">

<div class="jumbotron hidden-xs">
<div class="container hidden-xs">
<div class="row">
<div class="col-md-12">
<h1><strong>We follow Christ.</strong></h1>

<div id="button"><a class="btn btn-info btn-lg" href="contact.html" role="button">JOIN US </a></div>
</div>
</div>
</div>
</div>

<div class="container hidden-xs hidden-sm box ">
<div class="row">
<div class="col-md-4">
<div class="thumbnail"><img alt="our stories.jpg" src="images/ourstories.jpg" /></div>
</div>

<div class="col-md-4">
<div class="thumbnail"><img alt="black-and-white-city-house.jpg" src="images/prayer.jpg" /></div>
</div>

<div class="col-md-4">
<div class="thumbnail"><img alt="come all. come Hungry." src="images/smallgroups.jpg" /></div>
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>images/meeting.jpg" /></div>
</div>

<div class="col-md-4">
<div class="thumbnail"><img src="images/chialpha.jpg" /></div>
</div>

<div class="col-md-4">
<div class="thumbnail"><img src="images/support.jpg" /></div>
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="thumbnail"><img src="images/pastor.jpg" /></div>
</div>

<div class="col-md-4">
<div class="thumbnail"><img src="images/ourChurch.jpg" /></div>
</div>

<div class="col-md-4">
<div class="thumbnail"><img src="images/mission-trip.jpg" /></div>
</div>
</div>
</div>

<div class="jumbotron box2">
<div class="container-fuild">
<h2>Let&#39;s learn about Jesus together</h2>

<h3>Join us in the Student Rathigan Center,<br />
room 265, every thuesday at 7pm.</h3>
</div>
</div>

<div class="row" id="company">
<div class="col-md-12 main">
<h2 id="xa"><strong>Chi Alpha Wichita</strong></h2>

<p>Chi Alpha is a Christian fellowship in Wichita State University that provides a place for Christians students to grow in their faith and develop a stronger personal relationship with God.</p>

<div id="button"><button class="btn btn-default" type="button">See our lookbook</button></div>
</div>
</div>

<div class="contact-page">
<div class="row">
<div class="col-md-12">
<div class="contact-us">
<div class="thumbnail hidden-xs " id="location"><img class="img-responsible" src="images/map.png" /></div>
</div>

<form class="form-horizontal">
<h2>Contact us</h2>

<div class="form-group"><label class="col-sm-2 control-label" for="name">Name</label>

<div class="col-sm-12"><input id="name" name="name" placeholder="Name" required="" type="text" /></div>
</div>

<div class="form-group"><label class="col-sm-2 control-label" for="email">Email</label>

<div class="col-sm-12"><input name="email" placeholder="email" required="" type="text" /></div>
</div>

<div class="form-group">
<div class="col-md-12"><textarea>Comment</textarea>

<div class="form-group">
<div class="col-md-12"><button class="btn btn-default" type="submit">Submit</button></div>
</div>
</div>
</div>
</form>

<div class="address">
<p>Chi Alpha Wichita Wichita, Kansas</p>

<p>Cell: (316) 207-8703<br />
Email: chialphawichita@gmail.com</p>

<p>We have our weekly fellowship on Tuesdays at 7:00pm in RSC room no 265</p>
</div>
</div>
</div>
</div>

<div class="row main">
<div class="col-md-12">
<h2 id="xa1"><strong>mission</strong></h2>

<p>Chi Alpha is not just another student organization, but a place where lives are transformed for the better. Through Chi Alpha close lifelong friendships develop.</p>
</div>
</div>

<footer>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="footer">
<h3>Get Connected</h3>

<p><a href="https://instagram.com/chialphawichita/">Instagram</a></p>

<p><a href="https://www.facebook.com/chialphawichita">facebook</a></p>

<p><a href="contact.html">office location</a></p>

<p><a href="contact.html">Contact Us</a></p>
</div>

<div class="footer">
<h3>The Ministry</h3>

<p><a href="index.html">Chi Alpha Wichita</a></p>

<p><a href="http://mwcchurch.com/">Maranatha Church</a></p>

<p><a href="http://mwcchurch.com/ministries/adults/chi-alpha-college.html">Support Us</a></p>
</div>

<div class="footer">
<h3>What we do</h3>

<p><a href="contact.html">Our Stories</a></p>

<p><a href="contact.html">Prayer Request</a></p>

<p><a href="contact.html">Small Group</a></p>

<p><a href="contact.html">Meeting </a></p>

<p><a href="contact.html">Mission trips</a></p>
</div>


<!-- Closed until i fix the php code for the templateto work in the CMS dashboard -->

		<!-- <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header> 

		<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?> -->


<?php

get_sidebar();
get_footer();

