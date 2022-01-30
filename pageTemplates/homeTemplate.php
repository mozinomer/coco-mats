<?php  /*  Template Name: Home Page Template */ get_header(); ?>


<div class="productSection">
	<div class="container">
		<h2>CLEARANCE FEATURES 60% OFF!</h2>
		<div class="row">
			<?php 
			$args = array(  
				'post_type' => 'product',
				'post_status' => 'publish',
				'posts_per_page' => 8,
			);
			$loop = new WP_Query( $args ); 
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class="col-md-3">
					<div class="productContainerMain">
						<a href="<?php the_permalink(); ?>">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3><?php the_title(); ?></h3>
								<div class="priceContainerProduct">
									<?php echo $product->get_price_html(); ?>
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata();  ?>
			<div class="col-md-12">
				<a href="#" class="classicButton">View All</a>
			</div>
		</div>
	</div>
</div>

<div class="personalizeSection">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="imageContainersSection2">
					<img src="./images/asd.png">
					<img src="./images/asd.png">
					<img src="./images/asd.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="contentSection2Container">
					<h5>PERSONALIZED OR PLAIN</h5>
					<h2>COCO COIR MATS</h2>
					<p>Printed on handwoven or vinyl backed naturally sustained Coir fiber mats, these mats feature your full name, monogram, or custom message. Making each mat one of a kind. Give your entrance the upgrade it deserves today!</p>
					<div class="buttonContainers">
						<a href="#" class="classicButton">Personalized Mats</a>
						<a href="#" class="classicButton">Plain Coco Mats</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="popularSection">
	<div class="container">
		<h5>MOST POPULAR</h5>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Holiday Designs Doormats</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Trending Designs</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<div class="row">
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="row">
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="productContainerMain">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
								<div class="priceContainerProduct">
									<?php //echo $product->get_price(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="customCocoMats" style="border-image: url('<?php echo 'asds'; ?>')">
	<div class="container">
		<div class="boxContainercustomCoco">
			<h5>MADE TO SIZE</h5>
			<h2>Custom Cut Coco Mats</h2>
			<p>Our Vinyl Backed coco mats are perfect for both residential and commercial applications.</p>
			<p>Get an upscale look at your building today.</p>
			<a href="#" class="classicButton">Shop Custom Cut Coco Mats </a>
		</div>
	</div>
</div>

<div class="productContainerAfterCustomCocoMats">
	<div class="container">
		<div class="row">
			<?php 
			$args = array(  
				'post_type' => 'product',
				'post_status' => 'publish',
				'posts_per_page' => 4,
			);
			$loop = new WP_Query( $args ); 
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class="col-md-3">
					<div class="productContainerMain">
						<a href="<?php the_permalink(); ?>">
							<div class="imageContainerProduct">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="nameProduct">
								<div class="slaeTag">
									Save $85.00
								</div>
								<h3><?php the_title(); ?></h3>
								<div class="priceContainerProduct">
									<?php echo $product->get_price_html(); ?>
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata();  ?>
			<div class="col-md-12">
				<a href="#" class="classicButton">View All</a>
			</div>
		</div>
	</div>
</div>




<div class="gridBoxes">
	<div class="container">
		<div class="row">
			
			<?php $termchildren = get_terms( 
				array(
					'taxonomy' => 'product_cat',
					'number'  =>  18,
					'hide_empty'  => true, 
					'orderby'  => 'include', 
					'parent' => 0
				));?>
				<?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); ?>
					<?php $yes = get_field('is_big', 'product_cat_'.$category->term_id); print_r($yes); ?>
					<?php if ($yes == 'Yes') { ?>
						<div class="col-md-6">
							<a href="<?php echo $term_link; ?>">
								<div class="cateGoeryBox" id="biggerBox" style="background-image: : url('<?php the_field('category_banner_image', 'product_cat_'.$category->term_id); ?>');">
									<div class="categoryName">
										<h2><?php echo $category->name; ?></h2>
									</div>
								</div>
							</a>
						</div>
					<?php } } ?>
					<div class="col-md-6">
						<div class="col-md-12">
							<?php $termchildren = get_terms( 
								array(
									'taxonomy' => 'product_cat',
									'number'  =>  18,
									'hide_empty'  => true, 
									'orderby'  => 'include', 
									'parent' => 0
								));?>
								<?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); ?>
									<?php $yes = get_field('is_large', 'product_cat_'.$category->term_id); print_r($yes); ?>
									<?php if ($yes == 'Yes') { ?>
										<a href="<?php echo $term_link; ?>">
											<div class="cateGoeryBox" id="largeBox" style="background-image: : url('<?php the_field('category_banner_image', 'product_cat_'.$category->term_id); ?>');">
												<div class="categoryName">
													<h2><?php echo $category->name; ?></h2>
												</div>
											</div>
										</a>
									<?php }
									else if ($yes == 'No') { ?>
										<a href="<?php echo $term_link; ?>">
											<div class="cateGoeryBox" id="smallBox" style="background-image: : url('<?php the_field('category_banner_image', 'product_cat_'.$category->term_id); ?>');">
												<div class="categoryName">
													<h2><?php echo $category->name; ?></h2>
												</div>
											</div>
										</a>
									<?php } } ?>

									<!-- <div class="cateGoeryBox" id="smallBox">
										<div class="categoryName">
											<h2>Designer Doormats</h2>
										</div>
									</div>
									<div class="cateGoeryBox" id="smallBox">
										<div class="categoryName">
											<h2>Designer Doormats</h2>
										</div>
									</div> -->
								</div>
							</div>
							<div class="col-md-6 dflex">
								<div class="cateGoeryBox" id="smallBox">
									<div class="categoryName">
										<h2>Designer Doormats</h2>
									</div>
								</div>
								<div class="cateGoeryBox" id="smallBox">
									<div class="categoryName">
										<h2>Designer Doormats</h2>
									</div>
								</div>
							</div>
							<div class="col-md-6">

								<div class="cateGoeryBox" id="largeBox">
									<div class="categoryName">
										<h2>Designer Doormats</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="shopTop">
					<div class="container">
						<h2>SHOP OUR TOP DESIGNS</h2>

						<div class="row">
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="productContainerMain">
									<div class="imageContainerProduct">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="nameProduct">
										<div class="slaeTag">
											Save $85.00
										</div>
										<h3>Handwoven Coco Doormats - 1.5" Thick 48x72</h3>
										<div class="priceContainerProduct">
											<?php //echo $product->get_price(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-12">
								<a href="#" class="classicButton">View All</a>
							</div>
						</div>
					</div>
				</div>



				<div class="homeFooterbanner">
					<img src="./images/aslijd.png">
				</div>




				<?php get_footer(); ?>