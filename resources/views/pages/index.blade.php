@extends("layout.app")

@section("content")

  <!-- HOME -->
  <section class="srcj-home" id="srcjHome">
    
    <!--Home Slider-->
    <div class="owl-carousel owl-theme home-slider">
      <div class="item">
        <div class="hs-item">
          <img src="imgs/home-banner-1.jpg" class="img-srcj"/>
          <div class="hsitem-inner">
            <div class="container-fluid">
              <div class="hsiteminner-inner">
                <div>
                  <h1>Discover a<br/>world of jewelry</h1>
                  <a href="javascript:void(0);" class="btn-srcj trans">EXPLORE BEST SELLER <span><i class="far fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="hs-item">
          <img src="imgs/home-banner-1.jpg" class="img-srcj"/>
          <div class="hsitem-inner">
            <div class="container-fluid">
              <div class="hsiteminner-inner">
                <div>
                  <h1>Discover a<br/>world of jewelry</h1>
                  <a href="javascript:void(0);" class="btn-srcj trans">EXPLORE BEST SELLER <span><i class="far fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    <!--/Home Slider-->

  </section>
  <!-- /HOME -->


  <!-- SALE BOXES -->
  <section class="srcj-saleboxes">
    <div class="container-fluid">
      <ul class="row sale-boxes">
        <li>
          <div class="sale-box wow slideInLeft">
            <img src="imgs/1.jpg" class="img-srcj"/>
            <div class="salebox-inner">
              <h4>NEW ARRIVALS</h4>
              <a href="javascript:void(0);" class="site-link">Shop Now</a>
            </div>
          </div>
        </li>
        <li>
          <div class="sale-box wow slideInRight delay-200ms">
            <img src="imgs/2.jpg" class="img-srcj"/>
            <div class="salebox-inner">
              <h4>BEST SELLER</h4>
              <a href="javascript:void(0);" class="site-link">Shop Now</a>
            </div>
          </div>
        </li>
        <li>
          <div class="sale-box wow slideInRight delay-400ms">
            <img src="imgs/3.jpg" class="img-srcj"/>
            <div class="salebox-inner">
              <h4>CLEARANCE SALE</h4>
              <a href="javascript:void(0);" class="site-link">Shop Now</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- SALE BOXES -->


  <!-- TOP CATEGORIES -->
  <section class="srcj-categories">
    <div class="container">
      <h4 class="text-center mb-std wow slideInDown">TOP CATEGORIES</h4>

      <!--Top Category Slider-->
      <div class="owl-carousel owl-theme category-slider wow slideInUp delay-200ms">
        <div class="item">
          <a href="javascript:void(0);" class="category-name">
            <div class="cat-img">
              <img src="imgs/category/1.png" class="img-srcj"/>
            </div>
            BRACELETS
          </a>
        </div>
        <div class="item">
          <a href="javascript:void(0);" class="category-name">
            <div class="cat-img">
              <img src="imgs/category/2.png" class="img-srcj"/>
            </div>
            CHARMS
          </a>
        </div>
        <div class="item">
          <a href="javascript:void(0);" class="category-name">
            <div class="cat-img">
              <img src="imgs/category/3.png" class="img-srcj"/>
            </div>
            EARINGS
          </a>
        </div>
        <div class="item">
          <a href="javascript:void(0);" class="category-name">
            <div class="cat-img">
              <img src="imgs/category/4.png" class="img-srcj"/>
            </div>
            NECLASE
          </a>
        </div>
        <div class="item">
          <a href="javascript:void(0);" class="category-name">
            <div class="cat-img">
              <img src="imgs/category/5.png" class="img-srcj"/>
            </div>
            RINGS
          </a>
        </div>
        <div class="item">
          <a href="javascript:void(0);" class="category-name">
            <div class="cat-img">
              <img src="imgs/category/2.png" class="img-srcj"/>
            </div>
            CHARMS
          </a>
        </div>
      </div>
      <!--/Top Category Slider-->

    </div>
  </section>
  <!-- /TOP CATEGORIES -->


  <!-- FEATURES -->
  <section class="srcj-features wow slideInRight">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow slideInLeft delay-400ms">
          <h2 class="mb-std">HANDCRAFTED<br/>& ETHNICALLY SOURCED</h2>
          <ul class="feature-list mb-std">
            <li class="row vcentr">
              <div class="col-2">
                <img src="imgs/icons/fair-pricing.svg" class="img-srcj"/>
              </div>
              <div class="col-10">
                <h6 class="txtup fntheme">FAIR PRICING</h6>
                Nullam quis ante. Pellentesque libero tortor, tincidunt et, tinciduntamet est.In hac habitasse platea dictumst.
              </div>
            </li>
            <li class="row vcentr">
              <div class="col-2">
                <img src="imgs/icons/hagh-quality.svg" class="img-srcj"/>
              </div>
              <div class="col-10">
                <h6 class="txtup fntheme">HAGH QUALITY</h6>
                Nullam quis ante. Pellentesque libero tortor, tincidunt et, tinciduntamet est.In hac habitasse platea dictumst.
              </div>
            </li>
          </ul>
          <a href="javascript:void(0);" class="btn-srcj">LEARN MORE <span><i class="far fa-long-arrow-right"></i></span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- FEATURES -->


  <!-- OUR CLIENTS & PARTNERS -->
  <section class="srcj-clients-partners">
    <div class="container-fluid">
      <h4 class="text-center wow slideInDown">OUR CLIENTS & PARTNERS</h4>

      <!--Clients & Partners Slider-->
      <div class="owl-carousel owl-theme clients-slider wow slideInUp delay-200ms">
        <div class="item">
          <div class="client-box">
            <img src="imgs/clients/1.png" class="img-srcj"/>
          </div>
        </div>
        <div class="item">
          <div class="client-box">
            <img src="imgs/clients/2.png" class="img-srcj"/>
          </div>
        </div>
        <div class="item">
          <div class="client-box">
            <img src="imgs/clients/3.png" class="img-srcj"/>
          </div>
        </div>
        <div class="item">
          <div class="client-box">
            <img src="imgs/clients/4.png" class="img-srcj"/>
          </div>
        </div>
        <div class="item">
          <div class="client-box">
            <img src="imgs/clients/5.png" class="img-srcj"/>
          </div>
        </div>
        <div class="item">
          <div class="client-box">
            <img src="imgs/clients/6.png" class="img-srcj"/>
          </div>
        </div>
      </div>
      <!--/Clients & Partners Slider-->


      <div class="row">
        <div class="col-lg-6">
          <div class="elegent-img wow slideInLeft">
            <img src="imgs/way-express.jpg" class="img-srcj"/>
            <div class="elegent-img-inner wow slideInRight delay-200ms">
              <img src="imgs/longer-than-life.png" class="img-srcj"/>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow slideInRight delay-400ms">
          <div class="elegent-text">
            <h2>Elegance Is a Way Of<br/>Expression And<br/>It Lasts Longer Than Life</h2>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /OUR CLIENTS & PARTNERS -->



  <!-- TRENDING PRODUCTS -->
  <section class="srcj-trending-products">
    <div class="container-fluid">
      <h4 class="text-center mb-std wow slideInDown">TRENDING PRODUCTS</h4>

      <ul class="row product-list">
        <li class="col-lg-3 col-sm-6 wow slideInUp delay-200ms">
          <div class="product-box">
            <div class="product-img">
              <span class="prod-label outofstock">Out of stock</span>
              <img src="imgs/products/1.jpg" class="img-srcj"/>
              <div class="product-actions-wrapper">
                <ul class="product-actions">
                  <li><a href="shop-details.html"><i class="far fa-long-arrow-right"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-heart"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-search"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-det">
              <div class="rate-review">
                <div class="star-rate-display">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star-half-alt"></i></span>
                </div>
                <span class="reviews-disp">(0 Reviews)</span>
              </div>
              <span class="product-name">LARGE CHARLOTTE HOOPS</span>
              <span class="product-price">$214.00</span>
            </div>
          </div>
        </li>
        <li class="col-lg-3 col-sm-6 wow slideInUp delay-400ms">
          <div class="product-box">
            <div class="product-img">
              <span class="prod-label discount">-10%</span>
              <span class="prod-label hotproduct">Hot Product</span>
              <img src="imgs/products/2.jpg" class="img-srcj"/>
              <div class="product-actions-wrapper">
                <ul class="product-actions">
                  <li><a href="shop-details.html"><i class="far fa-long-arrow-right"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-heart"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-search"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-det">
              <div class="rate-review">
                <div class="star-rate-display">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star-half-alt"></i></span>
                </div>
                <span class="reviews-disp">(0 Reviews)</span>
              </div>
              <span class="product-name">LARGE CHARLOTTE HOOPS</span>
              <span class="product-price">$214.00</span>
            </div>
          </div>
        </li>
        <li class="col-lg-3 col-sm-6 wow slideInUp delay-600ms">
          <div class="product-box">
            <div class="product-img">
              <span class="prod-label discount">-10%</span>
              <span class="prod-label hotproduct">Hot Product</span>
              <img src="imgs/products/3.jpg" class="img-srcj"/>
              <div class="product-actions-wrapper">
                <ul class="product-actions">
                  <li><a href="shop-details.html"><i class="far fa-long-arrow-right"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-heart"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-search"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-det">
              <div class="rate-review">
                <div class="star-rate-display">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star-half-alt"></i></span>
                </div>
                <span class="reviews-disp">(0 Reviews)</span>
              </div>
              <span class="product-name">LARGE CHARLOTTE HOOPS</span>
              <span class="product-price">$214.00</span>
            </div>
          </div>
        </li>
        <li class="col-lg-3 col-sm-6 wow slideInUp delay-800ms">
          <div class="product-box">
            <div class="product-img">
              <img src="imgs/products/4.jpg" class="img-srcj"/>
              <div class="product-actions-wrapper">
                <ul class="product-actions">
                  <li><a href="shop-details.html"><i class="far fa-long-arrow-right"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-heart"></i></a></li>
                  <li><a href="javacript:void(0);"><i class="far fa-search"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-det">
              <div class="rate-review">
                <div class="star-rate-display">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star-half-alt"></i></span>
                </div>
                <span class="reviews-disp">(0 Reviews)</span>
              </div>
              <span class="product-name">LARGE CHARLOTTE HOOPS</span>
              <span class="product-price">$214.00</span>
            </div>
          </div>
        </li>
      </ul>

      <div class="text-center mt-std wow slideInUp delay-600ms">
        <a href="javascript:void(0);" class="btn-srcj">VIEW ALL <span><i class="far fa-long-arrow-right"></i></span></a>
      </div>

    </div>
  </section>
  <!-- /TRENDING PRODUCTS -->

  


  <!-- TESTIMONIALS -->
  <section class="srcj-testmonials" id="userReviews"></section>
  <!-- /TESTIMONIALS -->



  <!-- BLOG -->
  <section class="srcj-blog home" id="srcjBlog"></section>
  <!-- BLOG -->
  


  
  @endsection