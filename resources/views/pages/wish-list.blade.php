@extends("layout.app")
@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Wishlist</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Wishlist</li>
                </ul>
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- GENERAL SUBPAGE | Wishlist -->
  <section class="srcj-subpage wl" id="srcjSubpage">
    <div class="container">
      <div class="cart-wrapper wishlist">
        <div class="cart-item wl-item">
            <div class="cart-img">
                <img src="imgs/products/1.jpg" class="img-srcj">
            </div>
            <div class="cart-det wl-det">
                <h6 class="cartpro-name">Large Charlotte Hoops</h6>
                <h5 class="cartpro-price">$80</h5>
                <span>October 21, 2023</span>
            </div>
            <div class="cart-count">
                <div class="item-count">
                    <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
                    <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
                    <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
                </div>
            </div>
            <div class="wl-action">
                <p>In stock</p>
                <a href="{{route("shop-details")}}" class="btn-srcj sml">View Product</a>
            </div>
            <div class="cart-delete">
                <a href="javascript:void(0);" data-toggle="tooltip" title="Remove Item"><i class="fas fa-times-circle"></i></a>
            </div>
        </div>
        <div class="cart-item wl-item">
            <div class="cart-img">
                <img src="imgs/products/2.jpg" class="img-srcj">
            </div>
            <div class="cart-det wl-det">
                <h6 class="cartpro-name">Large Charlotte Hoops</h6>
                <h5 class="cartpro-price">$80</h5>
                <span>October 21, 2023</span>
            </div>
            <div class="cart-count">
                <div class="item-count">
                    <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
                    <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
                    <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
                </div>
            </div>
            <div class="wl-action">
                <p>In stock</p>
                <a href="{{route("shop-details")}}" class="btn-srcj sml">View Product</a>
            </div>
            <div class="cart-delete">
                <a href="javascript:void(0);" data-toggle="tooltip" title="Remove Item"><i class="fas fa-times-circle"></i></a>
            </div>
        </div>
        <div class="cart-item wl-item">
            <div class="cart-img">
                <img src="imgs/products/3.jpg" class="img-srcj">
            </div>
            <div class="cart-det wl-det">
                <h6 class="cartpro-name">Large Charlotte Hoops</h6>
                <h5 class="cartpro-price">$80</h5>
                <span>October 21, 2023</span>
            </div>
            <div class="cart-count">
                <div class="item-count">
                    <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
                    <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
                    <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
                </div>
            </div>
            <div class="wl-action">
                <p>In stock</p>
                <a href="{{route("shop-details")}}" class="btn-srcj sml">View Product</a>
            </div>
            <div class="cart-delete">
                <a href="javascript:void(0);" data-toggle="tooltip" title="Remove Item"><i class="fas fa-times-circle"></i></a>
            </div>
        </div>
        
        
      </div>
        
    </div>
  </section>
  <!-- /GENERAL SUBPAGE | Wishlist -->

  
@endsection