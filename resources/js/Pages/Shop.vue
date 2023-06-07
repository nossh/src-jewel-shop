  <script setup>
    import Testimonials from '../Components/Global/Testimonials.vue';
    import BlogSection from '../Components/Global/BlogSection.vue';
    import MiniAbout from '../Components/Shop/MiniAbout.vue';
    import ShopHeadTitle from '../Components/Shop/ShopHeadTitle.vue';
    import ShopBgImage from '../Components/Shop/ShopBgImage.vue';
    import ProductSlider from '../Components/Shop/ProductSlider.vue';
    import ProductList from '../Components/Shop/ProductList.vue';
    import HeaderWrap from '@/Components/SiteHeader/HeaderWrap.vue';
    import FooterWrap from '@/Components/Footer/FooterWrap.vue';

  // Accessing data from database with props
  defineProps({
    products: {
      type: Array,
    },
  });
  // console.log(products);
  </script>

<template>
  <HeaderWrap />
    <!-- HOME -->
  <section class="srcj-home sp shop" id="srcjHome">
    <ShopBgImage />
   
    <div class="homesp-inner olayed">
        <div class="container">
            <div class="hsiteminner-inner">
              <div>
<!--                 <h1>Head {{ products }}</h1>
 -->                <ShopHeadTitle />


                <ProductSlider />
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->
  
  <ProductList v-bind:products="products"/>

  <MiniAbout />
  <Testimonials />
  <BlogSection />

  <FooterWrap />
</template>

