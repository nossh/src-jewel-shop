<script setup>
	import SiteLogo from '@/Components/SiteHeader/SiteLogo.vue';
	import MainMenu from './MainMenu.vue';
	import SideMenu from './SideMenu.vue';
</script>

<template>
	<!-- MAIN HEADER -->
	<header id="srcjHeader" class="srcj-header">
	  <!-- Menu Bar Starts -->
	<div class="ih-inner">
	  <div class="container-fluid">
	    <div class="row vcentr mob-ctrl">
	      <SiteLogo />
	      <MainMenu />
	      <SideMenu />
	    </div>
	  </div>

	</div>
	<!-- Menu Bar Ends -->

	</header>
	<!-- /MAIN HEADER -->
</template>