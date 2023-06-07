<template>
	<!-- BLOG -->
	<section class="srcj-blog home" id="srcjBlog">
		<div class="container-fluid">
			<BlogTitle />
			<BlogSlider />
			<BlogViewAllButton />
		</div>
	</section>
	<!-- BLOG -->
</template>

<script setup>
	import BlogTitle from '../Extra/BlogTitle.vue';
	import BlogSlider from '../Extra/BlogSlider.vue';
	import BlogViewAllButton from '../Extra/BlogViewAllButton.vue';

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
     });
</script>