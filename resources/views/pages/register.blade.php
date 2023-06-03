@extends("layout.app")
@section("content")

  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Register Now</h1>
                
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- GENERAL SUBPAGE | Register -->
  <section class="srcj-subpage register" id="srcjSubpage">
    <div class="container">
        <div class="register-wrapper">
            <h2 class="text-center mb-std">Create an account</h2>
            <form class="row general-form form-register">
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="First Name">
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="Last Name">
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="Phone Number">
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="password" placeholder="Password">
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="password" placeholder="Confirm Password">
                </div>
                <div class="form-group col-lg-12 text-center">
                    <a href="index.html" class="btn-srcj transblack">Back</a>
                    <button type="button" class="btn-srcj">Register</button>
                </div>
                <div class="form-group col-lg-12 text-center mar-off">
                    I have an account? <a class="fwt600" href="login.html">Login Now</a>
                </div>
            </form>
        </div>

    </div>
  </section>
  <!-- /GENERAL SUBPAGE | Register -->

@endsection