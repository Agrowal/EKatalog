    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo ROOT_URL; ?>/assets/images/slides/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Witamy na stronie E.KATOLOG! Bootstrap3+PHP Database</h2>
                                    <p class="animation animated-item-2">Sed mattis enim in nulla blandit tincidunt. Phasellus vel sem convallis, mattis est id, interdum augue. Integer luctus massa in arcu euismod venenatis. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo ROOT_URL; ?>/assets/images/slides/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive HTML Webapplication</h2>
                                    <p class="animation animated-item-2">Phasellus adipiscing felis a dictum dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ligula risus. </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo ROOT_URL; ?>/assets/images/slides/3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Works Seamlessly Well on All Devices</h2>
                                    <p class="animation animated-item-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae euismod lacus. Maecenas in tempor lectus. Nam mattis, odio ut dapibus ornare, libero. </p>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>Witamy w <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">E.Katalogu!</span> Całkowicie darmowyej bazie roślin opartej na Bootstrapie i PHP!</h3> <a href="<?php echo ROOT_URL; ?>queries" class="btn btn-orange">Zobacz bazę!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		<!-- Services -->
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-home"></i>
		        			<h3>Szybka rejestracja</h3>
		        			<p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
		        			<a href="#" class="btn">Dowiedz się więcej</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-briefcase"></i>
		        			<h3>Nowczesny wzorzec MVC</h3>
		        			<p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
		        			<a href="#" class="btn">Dowiedz się więcej</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-calendar"></i>
		        			<h3>Własne projekty</h3>
		        			<p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
		        			<a href="#" class="btn">Dowiedz się więcej</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->


<hr>

		<!-- Our Portfolio -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Ostatnio dodane pozycje</h1>
				</div>
		
		
			<ul class="grid cs-style-3">
			<?php foreach ($viewmodel as $item): ?>
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<!-- <img src="<?php echo ROOT_URL; ?>/assets/images/portfolio/4.jpg" alt="img04"> -->
						<img src="<?php echo $item['GatunekIMG']; ?>" alt="img04">
						<figcaption>
							<h3><?php echo $item['GatunekNazwaPL']; ?></h3>
							<span><?php echo $item['GatunekNazwaLAT']; ?></span>
							<a href="#">Zobacz więcej</a>
						</figcaption>
					</figure>
	        	</div>	
	        <?php endforeach; ?>
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Our Portfolio -->

<hr>

		<!-- Our Clients -->
	    <div class="section">
	    	<div class="container">
			
				<div class="section-title">
				<h1>Nasi partnerzy</h1>
				</div>

				<div class="clients-logo-wrapper text-center row">
					<?php for($i = 1; $i<=12; $i++): ?>
						<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo ROOT_URL; ?>/assets/images/logos/logo-<?php echo $i;?>.jpg" alt="Client Name"></a></div>
					<?php endfor; ?>
				</div>
			</div>
	    </div>
	    <!-- End Our Clients -->