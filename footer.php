


<div class="footerContent">
	<div class="container">
		<p>Coco Mats 'N More is the #1 source for environmentally friendly coco mats and coco matting made from 100% natural coir fiber. We produce hundreds of the most popular designs for coco mats in America. Get one of our designs and experience the Coco Mats N More difference today!</p>
	</div>
</div>
<div class="newsLetter">
	<div class="container">
		<h2>Sign up and save</h2>
		<p>Get special offers, chance at free giveaways, and other amazing deals.</p>
		<div class="newsLetterForm">
			<input type="email" name="" placeholder="Enter your email">
			<button class="classicButton">Subscribe</button>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<h4>SITE MAP</h4>
						<ul>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h4>SITE MAP</h4>
						<ul>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
							<li><a href="#">Personalized Coco Mats</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h4>SITE MAP</h4>
						<ul>
							<li>
								CocomatsNMore <br> 104 -4th Street <br>Blaine, WA 98230
							</li>
							<li>
								Toll free: (866) 561-1921 
								<br>Phone: 360-255-7282
								<br>Fax: 614-455-9055
							</li>
							<li>
								service@cocomatsnmore.com
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="logoFooter">
					<a href="<?php echo site_url(); ?>">
						<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

						if ( has_custom_logo() ) {
							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						} else {
							echo '<h1>' . get_bloginfo('name') . '</h1>';
						}
						?>
					</a>
				</div>
				<div class="socialIcons">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

<?php wp_footer(); ?>
</body>
</html>