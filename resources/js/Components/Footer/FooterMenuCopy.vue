<script setup>
  defineProps ({
    copy: {
        type: String,
    },
  });
</script>


<template>

  <div class="ft-bottom">
    <ul class="nav ft-menu">
      <li><a href="javascript:void(0);">SHIPPING</a></li>
      <li><a href="javascript:void(0);">PAYMENT METHODS</a></li>
      <li><a href="javascript:void(0);">RETURNS</a></li>
      <li><a :href="route('terms')">TERMS & CONDITIONS</a></li>
      <li><a :href="route('privacy-policy')">PRIVACY POLICY</a></li>
      <li><a :href="route('faq')">FAQ’S</a></li>
    </ul>
    <div class="copyright">
      @ {{ copy }} SRC . ALL RIGHTS RESERVED
    </div>
  </div>

</template>