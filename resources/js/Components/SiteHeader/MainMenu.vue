<script setup>
	
</script>

<template>
	<div class="site-menu">
        <ul class="nav srcj-deskmenu">
          <li><a :href="route('/')">Home</a></li>
          <li><a :href="route('shop')">SHOP</a></li>
          <li><a :href="route('about')">ABOUT US</a></li>
          <li><a :href="route('blog-list')">BLOG</a></li>
          <li><a :href="route('contact')">CONTACT US</a></li>
        </ul>
      </div>
</template>