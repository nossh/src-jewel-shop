<div class="container-fluid">
    <div class="text-center wow slideInRight">
      <h4 class="text-center mb-std">FROM OUR BLOG</h4>
    </div>
    
    <!--Blog Slider-->
    <div class="owl-carousel owl-theme blog-slider wow slideInLeft delay-200ms">
      <div class="item">
        <div class="blog-item">
          <div class="blog-img">
            <img src="imgs/blog/1.jpg" class="img-srcj"/>
          </div>
          <span class="fclbody fwt400 fntheme">JEWELLERY</span>
          <h4 class="fwt600">Travelling Solo Is Awesome</h4>
          <a href="blog-detail.html">Read More</a>
        </div>
      </div>
      <div class="item">
        <div class="blog-item">
          <div class="blog-img">
            <img src="imgs/blog/2.jpg" class="img-srcj"/>
          </div>
          <span class="fclbody fwt400 fntheme">JEWELLERY</span>
          <h4 class="fwt600">Travelling Solo Is Awesome</h4>
          <a href="blog-detail.html">Read More</a>
        </div>
      </div>
      <div class="item">
        <div class="blog-item">
          <div class="blog-img">
            <img src="imgs/blog/3.jpg" class="img-srcj"/>
          </div>
          <span class="fclbody fwt400 fntheme">JEWELLERY</span>
          <h4 class="fwt600">Travelling Solo Is Awesome</h4>
          <a href="blog-detail.html">Read More</a>
        </div>
      </div>
    </div>
    <!--/Blog Slider-->

    <div class="text-center mt-std wow slideInRight delay-400ms">
      <a href="blog-list.html" class="btn-srcj">View All <span><i class="far fa-long-arrow-right"></i></span></a>
    </div>
</div>


<script>
    $(document).ready(function() {
       var owl = $('.blog-slider');
       owl.owlCarousel({
         loop: true,
         margin: 20,
         autoplay: 3000,
         autoplayHoverPause: true,
         pagination: true,
         nav: false,
         dots: false,
         center: false,
         responsive:{
           0:{
               items:1
           },
           576:{
               items:2
           },
           992:{
               items:3
           }
         }
       });
     })
</script>