<template>
    <HeaderWrap />
    <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <CartBgImage />
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <CartHeadTitle />
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- GENERAL SUBPAGE | CART -->
  <section class="srcj-subpage cart" id="srcjSubpage">
    <div class="container">
      <CartShopTitle />

      <div class="row">

        <CartItems />

        <CartDetails />

        
      </div>
        
    </div>
  </section>
  <!-- /GENERAL SUBPAGE | CART --> 

  <FooterWrap />
</template>

<script setup>
    import HeaderWrap from '../Components/SiteHeader/HeaderWrap.vue';
    import FooterWrap from '../Components/Footer/FooterWrap.vue';
    import CartBgImage from '../Components/Cart/CartBgImage.vue';
    import CartDetails from '../Components/Cart/CartDetails.vue';
    import CartItems from '../Components/Cart/CartItems.vue';
    import CartHeadTitle from '../Components/Cart/CartHeadTitle.vue';
    import CartShopTitle from '../Components/Cart/CartShopTitle.vue';
</script>
 