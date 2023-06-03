<script setup>
  import FooterLogoAndTitle from './FooterLogoAndTitle.vue';
  import FooterMenuCopy from './FooterMenuCopy.vue';
  import Notification from './Notification.vue';

  defineProps({
    copy: {
      type: String,
    },
  });

</script>


<template>
	<!-- FOOTER -->
  <footer id="footer" class="srcj-footer">
  	<div class="container-fluid">
	  	<FooterLogoAndTitle />

	  	<FooterMenuCopy v-bind:copy="copy"/>
	  
	  
	</div>
  <Notification />
	
  </footer>
  <!-- /FOOTER -->
  


</template>