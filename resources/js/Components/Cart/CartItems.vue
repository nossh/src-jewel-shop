<template>
	<div class="col-lg-8">
            <div class="cart-wrapper mb-std">
                <div class="cart-item">
                    <div class="cart-img">
                        <img src="imgs/products/1.jpg" class="img-srcj">
                    </div>
                    <div class="cart-det">
                        <h6 class="cartpro-name">Large Charlotte Hoops</h6>
                    </div>
                    <div class="cart-count">
                        <div class="item-count">
                            <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
                            <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
                            <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
                        </div>
                    </div>
                    <div class="cart-price">
                        <h5 class="cartpro-price">$80</h5>
                    </div>
                    <div class="cart-delete">
                        <a href="javascript:void(0);" data-toggle="tooltip" title="Remove Item"><i class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="cart-img">
                        <img src="imgs/products/2.jpg" class="img-srcj">
                    </div>
                    <div class="cart-det">
                        <h6 class="cartpro-name">Large Charlotte Hoops</h6>
                    </div>
                    <div class="cart-count">
                        <div class="item-count">
                            <a class="qcount" id="Qminus" href="javascript:void(0);">-</a>
                            <input type="text" placeholder="1" class="form-control qty" id="usr" autocomplete="off">
                            <a class="qcount" id="Qplus" href="javascript:void(0);">+</a>
                        </div>
                    </div>
                    <div class="cart-price">
                        <h5 class="cartpro-price">$80</h5>
                    </div>
                    <div class="cart-delete">
                        <a href="javascript:void(0);" data-toggle="tooltip" title="Remove Item"><i class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cart-item cart-last-row">
                    <div>
                        <a :href="route('shop')" class="site-link">Continue Shopping</a>
                    </div>
                    <div class="coupon-code">
                        <form class="form-coupon-code">
                            <input type="text" class="form-control" placeholder="Coupon Code">
                            <PrimaryButton>
	                            APPLY COUPON
	                        </PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<script setup>
	import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>