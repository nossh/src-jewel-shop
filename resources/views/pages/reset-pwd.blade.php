@extends("layout.app")

@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Reset Password</h1>
                
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- GENERAL SUBPAGE | Reset Password -->
  <section class="srcj-subpage login" id="srcjSubpage">
    <div class="login-wrapper">
        <h4 class="text-center">Reset Password</h4>
        <p class="text-center mb-std">We will send a link to this email id to reset the password.</p>
        <form class="general-form form-login">
            <div class="form-group ">
                <input class="form-control" type="text" placeholder="Enter your registered email address">
            </div>
            <div class="form-group">
                <button type="button" class="btn-srcj">Submit</button>
            </div>
            <div class="form-group text-center mar-off">
                Remember password? <a class="fwt600" href="login.html">Login</a>
            </div>
        </form>
    </div>
  </section>
  <!-- /GENERAL SUBPAGE | Reset Password -->

  
@endsection