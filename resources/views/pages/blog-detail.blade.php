@extends("layout.app")

@section("content")


  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner olayed">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Blog Post</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="blog-list.html">Our Blog</a></li>
                    <li>Blog Post</li>
                </ul>
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->



  
  <!-- BLOG -->
  <section class="srcj-blog blog-detail" id="srcjBlog">
    <div class="container">
        <div class="blog-item wow slideInUp">
            <div class="blog-img">
              <img src="imgs/blog/1.jpg" class="img-srcj"/>
            </div>
            <span class="fclbody fwt400 fntheme">JEWELLERY</span>
            <h2 class="fwt600 mb-std">Travelling Solo Is Awesome</h2>
            <div class="blog-desc">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
            </div>
        </div>
        <div class="bpost-actions wow slideInUp delay-400ms">
            <ul class="bp-share clearfix">
              <li>
                <a href="javascript:void(0);">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
              <li>Share Now</li>
            </ul>
            <h5>Top comments</h5>
            <ul class="bp-comments wow slideInUp delay-600ms">
              <li>
                <a href="javascript:void(0);" class="bp-author">Albert Einsteen</a>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
              </li>
              <li>
                <a href="javascript:void(0);" class="bp-author">Jonathan B</a>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
              </li>
              <li class="post-comment">
                <form class="genform row" action="#">
                  <div class="form-group col-md-12">
                    <h5>Post your comment here</h5>
                  </div>
                  <div class="form-group col-md-6">
                    <input placeholder="Your Name" type="name" class="form-control" name="name" id="name">
                  </div>
                  <div class="form-group col-md-6">
                    <input placeholder="Your email address" type="email" class="form-control" name="email" id="email">
                  </div>
                  <div class="form-group col-md-12">
                    <textarea placeholder="Your comment" class="form-control" rows="5" name="comment" id="comment"></textarea>
                  </div>
                  <div class="form-group col-md-12 text-right mar-off">
                    <button type="submit" class="btn-srcj">Post comment</button>
                  </div>
                </form>
              </li>
            </ul>
        </div>
    </div>
  </section>
  <!-- BLOG -->
  


  <!-- TESTIMONIALS -->
  <section class="srcj-testmonials sp" id="userReviews"></section>
  <!-- /TESTIMONIALS -->
  
@endsection