@extends("layout.app")

@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Login</h1>
                
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- GENERAL SUBPAGE | Log in -->
  <section class="srcj-subpage login" id="srcjSubpage">
    <div class="login-wrapper">
        <h4 class="text-center mb-std">Login</h4>
        <form class="general-form form-login">
            <div class="form-group ">
                <input class="form-control" type="text" placeholder="Username or Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="form-group flxbx hspsbtw">
                <label class="cb-container">Remember me
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <div>
                    <a class="fwt600" href="reset-pwd.html">Forgot Password?</a>
                </div>
            </div>
            <div class="form-group">
                <button type="button" class="btn-srcj">Login</button>
            </div>
            <div class="form-group text-center mar-off">
                Don't have an account? <a class="fwt600" href="register.html">Register Now</a>
            </div>
        </form>
    </div>
  </section>
  <!-- /GENERAL SUBPAGE | Log in -->

  
@endsection