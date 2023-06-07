@extends("layout.app")
@section("content")


  <!-- HOME -->
  <section class="srcj-home sp shop" id="srcjHome">
    <img src="imgs/products/hb-shop.jpg" class="img-srcj"/>
   
    <div class="homesp-inner olayed">
        <div class="container">
            <div class="hsiteminner-inner">
              <div>
                <h1>Shop</h1>
                <ul class="breadcrumb">
                  <li><a href="index-2.html">Home</a></li>
                  <li>Shop</li>
                </ul>
                <hr>


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
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- PRODUCTS -->
  <section class="srcj-products">
    <div class="container-fluid">

      <ul class="row product-list">
        @if(isset($products))
          @foreach($products as $product)
            <li class="col-lg-3 col-sm-6 wow slideInUp delay-200ms">
              <div class="product-box">
                <div class="product-img">
                  @if($product->stock_status == 'in')
                    <span class="prod-label hotproduct">Hot Product</span>
                    @else
                    <span class="prod-label outofstock">Out of stock</span>
                  @endif
                  <img src="imgs/products/{{ $product->image_name }}" class="img-srcj"/>
                  <div class="product-actions-wrapper">
                    <ul class="product-actions">
                      <li><a href="{{route('shop-details')}}"><i class="far fa-long-arrow-right"></i></a></li>
                      <li><a href="javacript:void(0);"><i class="far fa-heart"></i></a></li>
                      <li><add-to-cart-button><add-to-cart-button/></li>
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
                  <span class="product-name">{{ $product->name }}</span>
                  <span class="product-price">
                    <h6>
                      <span>${{ number_format($product->price) }}</span>
                      ${{ number_format($product->sale_price) }}
                    </h6>

                      ${{ number_format($product->sale_price) }}
                  </span>
                </div>
              </div>
            </li>
          @endforeach
        @endif
      </ul>

      <div class="text-center mt-std">
        <a href="javascript:void(0);" class="btn-srcj">SHOW MORE <span><i class="far fa-long-arrow-right"></i></span></a>
      </div>
    </div>
  </section>
  <!-- /PRODUCTS -->



  
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