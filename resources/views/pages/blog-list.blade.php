@extends("layout.app")

@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner olayed">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Our Blog</h1>
                <ul class="breadcrumb">
                    <li><a href="{{route("/")}}">Home</a></li>
                    <li>Our Blog</li>
                </ul>
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->



  
  <!-- BLOG -->
  <section class="srcj-blog sp" id="srcjBlog">
    <div class="container-fluid">
        <ul class="row blog-list">
            <li class="col-lg-4 col-sm-6 wow slideInUp">
                <div class="blog-item">
                    <div class="blog-img">
                      <img src="imgs/blog/1.jpg" class="img-srcj"/>
                    </div>
                    <span class="fclbody fwt400 fntheme">JEWELLERY</span>
                    <h4 class="fwt600">Travelling Solo Is Awesome</h4>
                    <a href="{{route("blog-detail")}}">Read More</a>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 wow slideInUp delay-200ms">
                <div class="blog-item">
                    <div class="blog-img">
                      <img src="imgs/blog/2.jpg" class="img-srcj"/>
                    </div>
                    <span class="fclbody fwt400 fntheme">JEWELLERY</span>
                    <h4 class="fwt600">Travelling Solo Is Awesome</h4>
                    <a href="{{route("blog-detail")}}">Read More</a>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 wow slideInUp delay-400ms">
                <div class="blog-item">
                    <div class="blog-img">
                      <img src="imgs/blog/3.jpg" class="img-srcj"/>
                    </div>
                    <span class="fclbody fwt400 fntheme">JEWELLERY</span>
                    <h4 class="fwt600">Travelling Solo Is Awesome</h4>
                    <a href="{{route("blog-detail")}}">Read More</a>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 wow slideInUp">
                <div class="blog-item">
                    <div class="blog-img">
                      <img src="imgs/blog/1.jpg" class="img-srcj"/>
                    </div>
                    <span class="fclbody fwt400 fntheme">JEWELLERY</span>
                    <h4 class="fwt600">Travelling Solo Is Awesome</h4>
                    <a href="{{route("blog-detail")}}">Read More</a>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 wow slideInUp delay-200ms">
                <div class="blog-item">
                    <div class="blog-img">
                      <img src="imgs/blog/2.jpg" class="img-srcj"/>
                    </div>
                    <span class="fclbody fwt400 fntheme">JEWELLERY</span>
                    <h4 class="fwt600">Travelling Solo Is Awesome</h4>
                    <a href="{{route("blog-detail")}}">Read More</a>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 wow slideInUp delay-400ms">
                <div class="blog-item">
                    <div class="blog-img">
                      <img src="imgs/blog/3.jpg" class="img-srcj"/>
                    </div>
                    <span class="fclbody fwt400 fntheme">JEWELLERY</span>
                    <h4 class="fwt600">Travelling Solo Is Awesome</h4>
                    <a href="{{route("blog-detail")}}">Read More</a>
                </div>
            </li>
        </ul>
    </div>
  </section>
  <!-- BLOG -->
  


  <!-- TESTIMONIALS -->
  <section class="srcj-testmonials sp" id="userReviews"></section>
  <!-- /TESTIMONIALS -->
  

@endsection