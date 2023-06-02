@extends("layout.app")

@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Checkout</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li>Checkout</li>
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
    <div class="container-fluid">
      <ul class="payment-flow">
        <li>Shopping Cart</li>
        <li class="active">Check out</li>
      </ul>

      <div class="row">
        <div class="col-lg-6">
            <a href="cart.html" class="btn-srcj transblack btn-back mb-std"><span><i class="far fa-chevron-left"></i></span> Back</a>
            <div class="billing-address-wrapper">
                <h4>Billing Details</h4>

                <form class="row cust-row general-form">
                    <div class="form-group cust-col col-md-6">
                        <input class="form-control" type="text" placeholder="First Name">
                    </div>
                    <div class="form-group cust-col col-md-6">
                        <input class="form-control" type="text" placeholder="Last Name">
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <input class="form-control" type="text" placeholder="Company Name">
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <select class="form-control">
                            <option>Country / Region</option>
                            <option>India</option>
                            <option>Foreign</option>
                        </select>
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <input class="form-control" type="text" placeholder="Street Address">
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <input class="form-control" type="text" placeholder="Town / City">
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <input class="form-control" type="number" placeholder="Post Code">
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <input class="form-control" type="number" placeholder="Phone">
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <input class="form-control" type="number" placeholder="Email Address">
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <label class="cb-container">Create an account?
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <label class="rb-container">Ship to a different address?
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group cust-col col-md-12">
                        <textarea class="form-control" rows="5" placeholder="Order notes (Optional)"></textarea>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="cart-wrapper bggrey checkout-box">
                <div class="cart-item hdr">
                    <h4 class="fclwhite mar-off">Order Summary</h4>
                </div>
                
                <ul class="cart-table">
                    <li>
                        <div>
                            Large Charlotte Hoops
                        </div>
                        <div>
                            $200.00
                        </div>
                    </li>
                    <li>
                        <div>
                            Large Charlotte Hoops
                        </div>
                        <div>
                            $20.00
                        </div>
                    </li>
                </ul>

                <div class="checkout-order-summery">
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
                    </ul>
                </div>

                <div class="payment-box">
                    <div class="form-group">
                        <label class="rb-container">Direct Bank Transfer
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <span>Nullam quis ante. Pellentesque libero tortor, tincidunt et, tinciduntamet est.In hac habitasse platea dictumst.</span>
                    </div>
                    <div class="form-group">
                        <label class="rb-container">UPI
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="rb-container">Cash on delivery
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group mar-off">
                        <label class="rb-container">Paypal
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <a href="javascript:void(0)" class="btn-srcj txtup mt-std">PLACE ORDER</a>
            </div>
        </div>
      </div>
        
    </div>
  </section>
  <!-- /GENERAL SUBPAGE | CART -->

  


  
@endsection