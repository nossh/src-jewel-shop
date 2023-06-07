<template>
	<!--Blog Slider-->
    <div class="owl-carousel owl-theme blog-slider wow slideInLeft delay-200ms">
      <div class="item">
        <div class="blog-item">
          <div class="blog-img">
            <img src="imgs/blog/1.jpg" class="img-srcj"/>
          </div>
          <span class="fclbody fwt400 fntheme">JEWELLERY</span>
          <h4 class="fwt600">Travelling Solo Is Awesome</h4>
          <a :href="route('blog-detail')">Read More</a>
        </div>
      </div>
      <div class="item">
        <div class="blog-item">
          <div class="blog-img">
            <img src="imgs/blog/2.jpg" class="img-srcj"/>
          </div>
          <span class="fclbody fwt400 fntheme">JEWELLERY</span>
          <h4 class="fwt600">Travelling Solo Is Awesome</h4>
          <a :href="route('blog-detail')">Read More</a>
        </div>
      </div>
      <div class="item">
        <div class="blog-item">
          <div class="blog-img">
            <img src="imgs/blog/3.jpg" class="img-srcj"/>
          </div>
          <span class="fclbody fwt400 fntheme">JEWELLERY</span>
          <h4 class="fwt600">Travelling Solo Is Awesome</h4>
          <a :href="route('blog-detail')">Read More</a>
        </div>
      </div>
    </div>
    <!--/Blog Slider-->
</template>