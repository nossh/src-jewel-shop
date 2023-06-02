@extends("layout.app")
@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner olayed">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Product Details</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li>Details</li>
                </ul>
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->



  <!-- PRODUCT DETAILS -->
  <section class="product-details" id="prodDet">
    <div class="container">
        <div class="row prodet-top">
            <div class="col-lg-5 wow slideInLeft">
                <div class="prodet-img">
                    <img src="imgs/products/2.jpg" class="img-srcj"/>
                </div>
            </div>
            <div class="col-lg-7 prodet-rtcol wow slideInRight delay-200ms">
              <div class="rate-review">
                  <div class="star-rate-display">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star-half-alt"></i></span>
                  </div>
                  <span class="reviews-disp">15 User Comments</span>
              </div>
              <h2 class="prodet-name">Mercedes-AMG GT R Coupé</h2>
              <p>German Touch-up Kit to cover stone tracks and scratches in your vehicle</p>

              <h2 class="prodet-price"><span>$149,00</span>$89,00</h2>

              <div class="prodet-package">
                  <p>Select Package</p>
                  <ul class="package-list">
                      <li>
                          <a href="javascript:void(0);">
                              <span>STANDARD</span>
                              <h6><span>$199,00</span>$109,00</h6>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <span>PLATINUM</span>
                              <h6><span>$199,00</span>$109,00</h6>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <span>GOLD</span>
                              <h6><span>$199,00</span>$109,00</h6>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <span>ALL PACK</span>
                              <h6><span>$199,00</span>$109,00</h6>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="prodet-color">
                  <span>Select Color</span>
                  <div class="dropdown">
                    <button type="button" class="btn-pdcolor dropdown-toggle" data-toggle="dropdown">
                      <span></span> Silver Gold
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><span></span> Silver Gold</a>
                      <a class="dropdown-item" href="#"><span></span> Silver Gold</a>
                      <a class="dropdown-item" href="#"><span></span> Silver Gold</a>
                    </div>
                  </div>
              </div>
              <div class="prodet-actions">
                <a href="javascript:void(0);" class="share-btn"><span><i class="fas fa-share-alt"></i></span> Share</a>
                <div class="item-count">
							    <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
							    <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
							    <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
						 	  </div>
                <a href="javascript:void(0);" class="btn-srcj">Add to cart</a>
              </div>
            </div>
        </div>

        <div class="prodet-bottom wow slideInUp delay-400ms">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#menu1">Product description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu2">Package Included</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu3">Compatible Models</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu4">Application Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu5">Asked Questions</a>
            </li>
           
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="menu1">
              <ul class="info-list">
                <li>
                  Color Name: <span>ESTORIL Green MET</span>
                </li>
                <li>
                  Color Code: <span>B45</span>
                </li>
                <li>
                  Package: <span>Gold</span>
                </li>
                <li>
                  SKU: <span>CND-BSC-000233-010447</span>
                </li>
                <li>
                  EAN: <span>7091196556818</span>
                </li>
              </ul>
              <div class="row mb-std">
                <div class="col-lg-5">
                  <h4>Mercedes-AMG GT R Coupé<br/>Estoril Green B45 Paint</h4>
                </div>
                <div class="col-lg-7">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
              </div>
              <div class="row cust-row mb-std">
                <div class="col-4 cust-col wow slideInLeft">
                    <img src="imgs/about/1.jpg" class="img-srcj"/>
                </div>
                <div class="col-4 cust-col wow slideInLeft delay-200ms">
                    <img src="imgs/about/2.jpg" class="img-srcj"/>
                </div>
                <div class="col-4 cust-col wow slideInRight delay-400ms">
                    <img src="imgs/about/3.jpg" class="img-srcj"/>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="menu2">
              Content goes here...
            </div>
            <div class="tab-pane fade" id="menu3">
              Content goes here...
            </div>
            <div class="tab-pane fade" id="menu4">
              Content goes here...
            </div>
            <div class="tab-pane fade" id="menu5">
              Content goes here...
            </div>
            <div class="tab-pane fade" id="menu6">
              Content goes here...
            </div>
            <div class="tab-pane fade" id="menu7">
              Content goes here...
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- /PRODUCT DETAILS -->





  <!-- TRENDING PRODUCTS -->
  <section class="srcj-trending-products padtop-off">
    <div class="container">
      <h4 class="text-center txtup mb-std wow slideInDown">View Similar Products</h4>

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



  
  <!-- ABOUT BLACK SECTION -->
  <section class="srcj-black-sec">
    <div class="container-fluid">
        <ul class="row vcentr blksec-list">
            <li class="col-md-4 wow slideInLeft">
                <div class="today-text">
                    <img src="imgs/today.png" class="img-srcj"/>
                </div>
            </li>
            <li class="col-md-3 wow slideInLeft delay-200ms">
                <h2>The Story Goes On</h2>
            </li>
            <li class="col-md-5 wow slideInRight delay-400ms">
                <div class="black-inner-box">
                    <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</span>
                </div>
            </li>
        </ul>
    </div>
  </section>
  <!-- /ABOUT BLACK SECTION -->
  


  <!-- TESTIMONIALS -->
  <section class="srcj-testmonials sp" id="userReviews"></section>
  <!-- /TESTIMONIALS -->



  <!-- BLOG -->
  <section class="srcj-blog home" id="srcjBlog"></section>
  <!-- BLOG -->
  


  
@endsection