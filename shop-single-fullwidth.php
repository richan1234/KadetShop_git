<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="construction html5 template">
<link href="assets/images/favicon/favicon.ico" rel="icon">

<!-- Fonts
    ============================================= -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i' rel='stylesheet' type='text/css'>

<!-- Stylesheets
    ============================================= -->
<link href="assets/css/external.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>KadetShop</title>
</head>
<body>
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
	<header id="navbar-spy" class="header header-1">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					
				</div>
				<!-- .row end -->
			</div>
			<!-- .container end -->
		</div>
		<!-- .top-bar end -->
		<nav id="primary-menu" class="navbar navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="logo" href="home.php">
					<img src="assets/images/logo/c-shop-removebg-preview.png" alt="Autoshop">
					</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown active">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Home</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">shop</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">shop category</a>
									<ul class="dropdown-menu">
										<li>
											<a href="shop-category-right-sidebar.html">shop right sidebar</a>
										</li>
										<li>
											<a href="shop-category-left-sidebar.html">shop left sidebar</a>
										</li>
									</ul>
								</li>
								
								<li>
									<a href="shop-cart.html">shop cart</a>
								</li>
							</ul>
						</li>

						<li class="has-dropdown pull-left">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">contact</a>
							<ul class="dropdown-menu">
								<li>
									<a href="contact-1.html">contact 1</a>
								</li>
								<li>
									<a href="contact-2.html">contact 2</a>
								</li>
							</ul>
						</li>
						<!-- li end -->
					</ul>
					
					<!-- Mod-->
					<div class="module module-search pull-left">
						<div class="search-icon">
							<i class="fa fa-search"></i>
							<span class="title">search</span>
						</div>
						<div class="search-box">
							<form class="search-form">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Type Your Search Words">
									<span class="input-group-btn">
									<button class="btn" type="button"><i class="fa fa-search"></i></button>
									</span>
								</div>
								<!-- /input-group -->
							</form>
						</div>
					</div>
					<!-- .module-search-->
					<!-- .module-cart -->
					<div class="module module-cart pull-left">
						<div class="cart-icon">
							<i class="fa fa-shopping-cart"></i>
							<span class="title">shop cart</span>
							<span class="cart-label">2</span>
						</div>
						<div class="cart-box">
							<div class="cart-overview">
								<ul class="list-unstyled">
									<li>
										<img class="img-responsive" src="assets/images/shop/thumb/1.jpg" alt="product"/>
										<div class="product-meta">
											<h5 class="product-title">Belt Car Engine</h5>
											<p class="product-price">Price: $68.00 </p>
											<p class="product-quantity">Quantity: 2</p>
										</div>
										<a class="cancel" href="#">cancel</a>
									</li>
									<li>
										<img class="img-responsive" src="assets/images/shop/thumb/2.jpg" alt="product"/>
										<div class="product-meta">
											<h5 class="product-title">OIL FILTER</h5>
											<p class="product-price">Price: $180.00 </p>
											<p class="product-quantity">Quantity: 1</p>
										</div>
										<a class="cancel" href="#">cancel</a>
									</li>
								</ul>
							</div>
							<div class="cart-total">
								<div class="total-desc">
									<h5>CART SUBTOTAL :</h5>
								</div>
								<div class="total-price">
									<h5>$316.00</h5>
								</div>
							</div>
							<div class="clearfix">
							</div>
							<div class="cart-control">
								<a class="btn btn-primary btn-block" href="shop-cart.html">view cart</a>
								<a class="btn btn-secondary btn-block" href="checkout.html">check out</a>
							</div>
						</div>
					</div>
					<!-- .module-cart end -->
					
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
	
	
<!-- Page Title
============================================= -->
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h1>Product</h1>
				</div>
				<!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<ol class="breadcrumb text-right">
						<li>
							<a href="home.php">Home</a>
						</li>
						<li class="active">shop</li>
					</ol>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #page-title end -->
	
	<!-- Shop Single right sidebar
============================================= -->

	<section id="shopgrid" class="shop shop-single">
		<div class="container shop-content">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<!-- Alert Message -->
					<div class="alert">
						<div class="alert-icon">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="alert-content">
							<h4>Item Was Successfully Added To Your Cart.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
						</div>
					</div>
					<!-- .aret end -->
				</div>
			</div>
			<!-- .row end -->
			<div class="row">
			<?php
    // Include your database connection script
    		include 'conf/conn.php';
			$desiredProductId = isset($_GET['product_id']) ? $_GET['product_id'] : null;
			if ($desiredProductId) {
			$query = "SELECT pdt_id, pdt_name, pdt_price, pdt_ctg, pdt_img FROM barang WHERE pdt_id = $desiredProductId"; 
			$result = mysqli_query($connection, $query);
			if ($row = mysqli_fetch_assoc($result)) {
				?>
				
				<div class="col-xs-12 col-sm-12 col-md-5">
					<div class="prodcut-images">
						<div class="product-img-slider">
						<img  src="assets/images/shop/grid/<?php echo $row['pdt_img'];?>" alt="product image"/>
						</div>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="product-title text-center-xs">
						<h3><?php echo $row['pdt_name']; ?></h3>
					</div>
					<!-- .product-title end -->
					<div class="product-meta mb-30">
						<div class="product-price pull-left pull-none-xs">
						<span class="symbole">Rp.</span><span><?php echo $row['pdt_price']; ?></span>
						</div>
						<!-- .product-price end -->
						<div class="product-review text-right text-center-xs">
							<span class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
							</span>
							<span>5 Review(s)</span> / <span>
							<a href="#">Add Review</a>
							</span>
						</div>
						<?php
					}
				}else{
					echo "Product not found";
				}

					// Close the database connection
					mysqli_close($connection);
			 
					?>
						
						<!--- .product-review end -->
					</div>
					<!-- .product-img end -->
					
					<div class="product-desc text-center-xs">
						<p class="mb-0">Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
					</div>
					<!-- .product-desc end -->
					
					<hr class="mt-30 mb-30">
					<div class="product-details text-center-xs">
						<h5>Other Details :</h5>
						<ul class="list-unstyled">
							<li>Product : <span>Air System</span></li>
							<li>Code : <span>#0214</span></li>
							<li>Availabiltity : <span>Available</span></li>
							<li>Brand : <span>Opel</span></li>
						</ul>
					</div>
					<!-- .product-details end -->
					<hr class="mt-30 mb-30">
					<div class="product-action">
						<div class="product-quantity pull-left pull-none-xs">
							<span class="qua">Quantity:</span>
							<span>
								<a  onclick="decreaseQuantity()"><i class="fa fa-minus"></i></a>
								<input type="text" value="2" id="pro-qunt" readonly>
								<a onclick="increaseQuantity()"><i class="fa fa-plus"></i></a>
							</span>
						</div>
						<div class="product-cta text-right text-center-xs">
							<a class="btn btn-primary" href="#">add to cart</a>
							<a class="btn btn-primary bordered" href="#">wishlist</a>
							<a class="btn btn-primary bordered" href="#">compare</a>
						</div>
					</div>
					<!-- .product-action end -->
					<hr class="mt-30 mb-30">
					<div class="product-share  text-center-xs">
						<h5 class="share-title">share product: </h5>
						<a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
						<a class="share-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
						<a class="share-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
					</div>
					<!-- .product-share end -->
				</div>
			</div>
			<!-- .row end -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="product-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#description" aria-controls="description" role="tab" data-toggle="tab">description</a>
							</li>
							<li role="presentation">
								<a href="#details" aria-controls="details" role="tab" data-toggle="tab">details</a>
							</li>
							<li role="presentation">
								<a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews(2)</a>
							</li>
						</ul>
						
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="description">
								<p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
								<p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
							</div>
							<!-- #description end -->
							<div role="tabpanel" class="tab-pane" id="details">
								<h5>Technical Details</h5>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Part Number</td>
											<td>60-MCTE</td>
										</tr>
										<tr>
											<td>Item Weight</td>
											<td>54 pounds</td>
										</tr>
										<tr>
											<td>Product Dimensions</td>
											<td>92.8 x 92.8 x 92.8 inches</td>
										</tr>
										<tr>
											<td>Item model number</td>
											<td>60-MCTE</td>
										</tr>
										<tr>
											<td>Item Package Quantity</td>
											<td>1</td>
										</tr>
										<tr>
											<td>Number of Handles</td>
											<td>1</td>
										</tr>
										<tr>
											<td>Batteries Required?</td>
											<td>No</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- #details end -->
							<div role="tabpanel" class="tab-pane reviews" id="reviews">
								<ul class="product-review list-unstyled">
									<li class="review-comment">
										<h6>Mostafa Amin</h6>
										<p class="review-date">22/02/2016</p>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
										<div class="product-comment">
											<p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
										</div>
									</li>
									<!-- .review-comment end -->
									
									<li class="review-comment">
										<h6>Mohamed Habaza</h6>
										<p class="review-date">21/02/2016</p>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-comment">
											<p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
										</div>
									</li>
									<!-- .review-comment end -->
								</ul>
								<div class="form-review">
									<form>
										<input type="text" class="form-control" id="name" placeholder="Your Name"/>
										<input type="email" class="form-control" id="email" placeholder="Your Email"/>
										<select class="form-control">
											<option selected="" value="Default">Your Rating</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
										<textarea class="form-control" id="review" rows="2" placeholder="Review"></textarea>
										<button type="submit" class="btn btn-primary btn-black btn-block">Post Your review</button>
									</form>
								</div>
							</div>
							<!-- #reviews end -->
						</div>
						<!-- #tab-content end -->
					</div>
					<!-- .product-tabs end -->
				</div>
			</div>
			<!-- .row end -->
			<!-- Pager -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 pager">
					<div class="page-prev">
						<a href="#"><i class="fa fa-angle-left"></i></a>
					</div>
					<div class="page-next">
						<a href="#"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- .row end -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="widget-related-product">
						<div class="widget-title">
							<h4>Related Products</h4>
						</div>
						<div class="widget-content">
							<div class="row">
								<!-- Product #1 -->
								<div class="col-xs-12 col-sm-6 col-md-3 product">
									<div class="product-img">
										<img  src="assets/images/shop/grid/1.jpg" alt="Product"/>
										<div class="product-hover">
											<div class="product-action">
												<a class="btn btn-primary" href="#">Add To Cart</a>
												<a class="btn btn-primary" href="#">Item Details</a>
											</div>
										</div>
										<!-- .product-overlay end -->
									</div>
									<!-- .product-img end -->
									<div class="product-bio">
										<div class="prodcut-cat">
											<a href="#">Opel</a>
										</div>
										<!-- .product-cat end -->
										<div class="prodcut-title">
											<h3>
												<a href="#">Brake Discs</a>
											</h3>
										</div>
										<!-- .product-title end -->
										<div class="product-price">
											<span class="symbole">$</span><span>68.00</span>
										</div>
										<!-- .product-price end -->
										
									</div>
									<!-- .product-bio end -->
								</div>
								<!-- .product end -->
								
								<!-- Product #2 -->
								<div class="col-xs-12 col-sm-6 col-md-3 product">
									<div class="product-img">
										<img  src="assets/images/shop/grid/2.jpg" alt="Product"/>
										<div class="product-hover">
											<div class="product-action">
												<a class="btn btn-primary" href="#">Add To Cart</a>
												<a class="btn btn-primary" href="#">Item Details</a>
											</div>
										</div>
										<!-- .product-overlay end -->
									</div>
									<!-- .product-img end -->
									<div class="product-bio">
										<div class="prodcut-cat">
											<a href="#">Subaru</a>
										</div>
										<!-- .product-cat end -->
										<div class="prodcut-title">
											<h3>
												<a href="#">OIL FILTER</a>
											</h3>
										</div>
										<!-- .product-title end -->
										<div class="product-price">
											<span class="symbole">$</span><span>40.00</span>
										</div>
										<!-- .product-price end -->
										
									</div>
									<!-- .product-bio end -->
								</div>
								<!-- .product end -->
								
								<!-- Product #3 -->
								<div class="col-xs-12 col-sm-6 col-md-3 product">
									<div class="product-img">
										<img  src="assets/images/shop/grid/3.jpg" alt="Product"/>
										<div class="product-hover">
											<div class="product-action">
												<a class="btn btn-primary" href="#">Add To Cart</a>
												<a class="btn btn-primary" href="#">Item Details</a>
											</div>
										</div>
										<!-- .product-overlay end -->
									</div>
									<!-- .product-img end -->
									<div class="product-bio">
										<div class="prodcut-cat">
											<a href="#">Opel</a>
										</div>
										<!-- .product-cat end -->
										<div class="prodcut-title">
											<h3>
												<a href="#">Belt Car Engine</a>
											</h3>
										</div>
										<!-- .product-title end -->
										<div class="product-price">
											<span class="symbole">$</span><span>180.00</span>
										</div>
										<!-- .product-price end -->
										
									</div>
									<!-- .product-bio end -->
								</div>
								<!-- .product end -->
								
								<!-- Product #4 -->
								<div class="col-xs-12 col-sm-6 col-md-3 product">
									<div class="product-img">
										<img  src="assets/images/shop/grid/4.jpg" alt="Product"/>
										<div class="product-hover">
											<div class="product-action">
												<a class="btn btn-primary" href="#">Add To Cart</a>
												<a class="btn btn-primary" href="#">Item Details</a>
											</div>
										</div>
										<!-- .product-overlay end -->
									</div>
									<!-- .product-img end -->
									<div class="product-bio">
										<div class="prodcut-cat">
											<a href="#">Mercedes</a>
										</div>
										<!-- .product-cat end -->
										<div class="prodcut-title">
											<h3>
												<a href="#">Tire Chains</a>
											</h3>
										</div>
										<!-- .product-title end -->
										<div class="product-price">
											<span class="symbole">$</span><span>230.00</span>
										</div>
										<!-- .product-price end -->
										
									</div>
									<!-- .product-bio end -->
								</div>
								<!-- .product end -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .product-related end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #blog end -->
	
	<!-- Footer #1
============================================= -->
	<footer id="footer" class="footer footer-1">
		<!-- Footer Info
	============================================= -->
		<div class="footer-info">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Truck"></i>
							</div>
							<div class="info-content">
								<h4>Produk Berkualitas</h4>
								<p>Pilihan Cerdas, Barang Berkualitas</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Dollars"></i>
							</div>
							<div class="info-content">
								<h4>Harga Terjangkau</h4>
								<p>Belanja Puas, Dompet Anti Kempes</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Shield"></i>
							</div>
							<div class="info-content">
								<h4>Keamanan Berbelanja</h4>
								<p> Belanja Aman, Tenang dan Nyaman</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Headset"></i>
							</div>
							<div class="info-content">
								<h4>Service</h4>
								<p>Ada kendala,hubungi kontak aja</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-info end -->
		
		
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script>
    function increaseQuantity() {
        var quantityInput = document.getElementById('pro-qunt');
        var currentQuantity = parseInt(quantityInput.value, 10);
        quantityInput.value = currentQuantity + 1;
    }

    function decreaseQuantity() {
        var quantityInput = document.getElementById('pro-qunt');
        var currentQuantity = parseInt(quantityInput.value, 10);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }
</script>
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>