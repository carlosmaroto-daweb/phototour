<div class="page-wrapper">
	<div class="background" style="background-image: url(<?php echo bloginfo('template_directory');?>/assets/images/phototour/index-bg.jpg);">
		<header class="header">
            <div class="header-top">
                <div class="header-left">
                    <div class="header-dropdown">
                        <a href="#">Usd</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">Eur</a></li>
                                <li><a href="#">Usd</a></li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropdown -->

                    <div class="header-dropdown">
                        <a href="#">Eng</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropdown -->
                </div><!-- End .header-left -->

                <div class="header-right">
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                <li><a href="<?php echo get_page_link(get_page_by_title('About')->ID);?>">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="<?php echo get_page_link(get_page_by_title('Private')->ID);?>"><i class="icon-user"></i>Login</a></li>
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>

                    <a href="<?php echo get_page_link(get_page_by_title('Home')->ID);?>" class="logo">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/logo.png" alt="Molla Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-center">
                	<nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="<?php echo get_page_link(get_page_by_title('Home')->ID);?>">Home</a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Shop</a>

                                <div class="megamenu megamenu-md">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-list.html">Shop List</a></li>
                                                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                            <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>

                                                        <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->

                                                    <div class="col-md-6">
                                                        <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>
                                                        <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="dashboard.html">My Account</a></li>
                                                            <li><a href="#">Lookbook</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-8 -->

                                        <div class="col-md-4">
                                            <div class="banner banner-overlay">
                                                <a href="category.html" class="banner banner-menu">
                                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/menu/banner-1.jpg" alt="Banner">

                                                    <div class="banner-content banner-content-top">
                                                        <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner banner-overlay -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-md -->
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Product</a>

                                <div class="megamenu megamenu-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="menu-col">
                                                <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="product.html">Default</a></li>
                                                    <li><a href="product-centered.html">Centered</a></li>
                                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                    <li><a href="product-gallery.html">Gallery</a></li>
                                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                </ul>
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="banner banner-overlay">
                                                <a href="category.html">
                                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/menu/banner-2.jpg" alt="Banner">

                                                    <div class="banner-content banner-content-bottom">
                                                        <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-md-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-sm -->
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Reviews')->ID);?>" class="white-text">Reviews</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Blog')->ID);?>" class="white-text">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Archives')->ID);?>" class="white-text">Archives</a>
                            </li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div>

                <div class="header-right">
                    <div class="header-search">
                        <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                        <form action="<?php echo home_url('/');?>">
                            <div class="header-search-wrapper">
                                <label for="ws" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="s" id="s" placeholder="Search in...">
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->
                    <div class="wishlist">
                        <a href="wishlist.html" title="Wishlist">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                        </a>
                    </div><!-- End .compare-dropdown -->

                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">2</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Beige knitted elastic runner shoes</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $84.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/products/cart/product-1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->

                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $76.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/products/cart/product-2.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">$160.00</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-primary">View Cart</a>
                                <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
	        