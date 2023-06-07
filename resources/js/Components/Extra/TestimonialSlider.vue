<template>
  <div class="container">
    <div class="text-center wow slideInDown wow slideInUp delay-200ms">
      <h4 class="text-center mb-std">TESTIMONIALS</h4>
    </div>

    <!--Testimonials Slider-->
    <div class="owl-carousel owl-theme review-slider wow slideInUp delay-400ms">
      <div class="item">
        <div class="review-item">
          <div class="star-rate-display">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star-half-alt"></i></span>
          </div>
          <h5 class="fwt700">“Amazing piece of history”</h5>
          <div class="review">
            Blood bank canine teeth larynx occupation therapist oncologist Optician plaque spinal tap stat strep..
          </div>
          
          <div class="review-holder">
            <div class="reviewer-img">
              <img src="imgs/ur1.jpg" class="img-srcj"/>
            </div>
            <div class="reviewer-det">
              <span>Lorraine Raines</span>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review-item">
          <div class="star-rate-display">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star-half-alt"></i></span>
          </div>
          <h5 class="fwt700">“Amazing piece of history”</h5>
          <div class="review">
            Blood bank canine teeth larynx occupation therapist oncologist Optician plaque spinal tap stat strep..
          </div>
          
          <div class="review-holder">
            <div class="reviewer-img">
              <img src="imgs/ur2.jpg" class="img-srcj"/>
            </div>
            <div class="reviewer-det">
              <span>S K Pottekkattu</span>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review-item">
          <div class="star-rate-display">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star-half-alt"></i></span>
          </div>
          <h5 class="fwt700">“Amazing piece of history”</h5>
          <div class="review">
            Blood bank canine teeth larynx occupation therapist oncologist Optician plaque spinal tap stat strep..
          </div>
          
          <div class="review-holder">
            <div class="reviewer-img">
              <img src="imgs/ur3.jpg" class="img-srcj"/>
            </div>
            <div class="reviewer-det">
              <span>Vaikkom Muhammed Basheer</span>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    <!--/Testimonials Slider-->
  </div>
</template>

<script setup>
  $(document).ready(function() {
   var owl = $('.review-slider');
   owl.owlCarousel({
     loop: true,
     margin: 0,
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
       1200:{
           items:3
       }
     }
   });
  });
</script>