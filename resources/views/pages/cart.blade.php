@extends("layout.app")
@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Cart</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Cart</li>
                </ul>
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- GENERAL SUBPAGE | CART -->
  <section class="srcj-subpage cart" id="srcjSubpage">
    <div class="container">
      <ul class="payment-flow">
        <li class="active">Shopping Cart</li>
        <li>Check out</li>
      </ul>

      <div class="row">
        <div class="col-lg-8">
            <div class="cart-wrapper mb-std">
                <div class="cart-item">
                    <div class="cart-img">
                        <img src="imgs/products/1.jpg" class="img-srcj">
                    </div>
                    <div class="cart-det">
                        <h6 class="cartpro-name">Large Charlotte Hoops</h6>
                    </div>
                    <div class="cart-count">
                        <div class="item-count">
                            <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
                            <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
                            <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
                        </div>
                    </div>
                    <div class="cart-price">
                        <h5 class="cartpro-price">$80</h5>
                    </div>
                    <div class="cart-delete">
                        <a href="javascript:void(0);" data-toggle="tooltip" title="Remove Item"><i class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="cart-img">
                        <img src="imgs/products/2.jpg" class="img-srcj">
                    </div>
                    <div class="cart-det">
                        <h6 class="cartpro-name">Large Charlotte Hoops</h6>
                    </div>
                    <div class="cart-count">
                        <div class="item-count">
                            <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
                            <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
                            <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
                        </div>
                    </div>
                    <div class="cart-price">
                        <h5 class="cartpro-price">$80</h5>
                    </div>
                    <div class="cart-delete">
                        <a href="javascript:void(0);" data-toggle="tooltip" title="Remove Item"><i class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cart-item cart-last-row">
                    <div>
                        <a href="shop.html" class="site-link">Continue Shopping</a>
                    </div>
                    <div class="coupon-code">
                        <form class="form-coupon-code">
                            <input type="text" class="form-control" placeholder="Coupon Code">
                            <button class="btn-srcj" type="button">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cart-wrapper bggrey">
                <ul class="cart-table">
                    <li>
                        <div>
                            Sub total
                        </div>
                        <div>
                            $200.00
                        </div>
                    </li>
                    <li>
                        <div>
                            Tax
                        </div>
                        <div>
                            $20.00
                        </div>
                    </li>
                    <li>
                        <div>
                            Delivery
                        </div>
                        <div>
                            $30.00
                        </div>
                    </li>
                    <li>
                        <div>
                            Total price
                        </div>
                        <div>
                            $250.00
                        </div>
                    </li>

                    <a href="checkout.html" class="btn-srcj txtup mt-std">Proceed to Checkout</a>
                </ul>
            </div>
        </div>
      </div>
        
    </div>
  </section>
  <!-- /GENERAL SUBPAGE | CART -->

  
@endsection