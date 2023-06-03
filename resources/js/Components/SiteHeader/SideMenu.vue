<script setup>
	defineProps({
    canLogin: {
      type: Boolean,
    },
  });
</script>

<template>
	<div class="site-actions">
        <ul class="nav srjc-actions-menu">
          <li>
            <a id="hdrSearch" href="javascript:void(0);"><i class="fal fa-search"></i></a>
            <div class="header-search-wrapper">
              <form class="header-search-form">
                <input type="text" placeholder="Search" class="form-control">
                <button type="button"><i class="far fa-search"></i></button>
              </form>
            </div>
          </li>

          

        <div v-if="canLogin">
            <li v-if="$page.props.auth.user"><a :href="route('dashboard')"><i class="fal fa-tachometer"></i></a></li>

            <template v-else>
                <li><a :href="route('login')"><i class="fal fa-user"></i></a></li>

                
                <li v-if="canRegister"><a :href="route('register')"><i class="fal fa-user"></i></a></li>
            </template>
        </div>

          


          <li><a :href="route('wish-list')"><i class="fal fa-heart"></i> <span>1</span></a></li>
          <li><a :href="route('cart')"><i class="fal fa-shopping-bag"></i> <span>1</span></a></li>
        </ul>
        <div class="mobile-menu">
          <a href="javascript:void(0);" class="menu-handle">
            <span id="mmBar"><i class="far fa-bars"></i></span>
            <span id="mmClose"><i class="fal fa-window-close"></i></span>
          </a>
        </div>
      </div>
</template>