<template>
	  <!-- PRODUCTS -->
  <section class="srcj-products">
    <div class="container-fluid">

<!--   <ul class="row product-list">
        @if(isset($products))
          @foreach($products as $product)
            <li class="col-lg-3 col-sm-6 wow slideInUp delay-200ms">
              <div class="product-box">
                <div class="product-img">
                  @if($product->stock_status == 'in')
                    <span class="prod-label hotproduct">Hot Product</span>
                    @else
                    <span class="prod-label outofstock">Out of stock</span>
                  @endif
                  <img src="imgs/products/{{ $product->image_name }}" class="img-srcj"/>
                  <div class="product-actions-wrapper">
                    <ul class="product-actions">
                      <li><a href="{{route('shop-details')}}"><i class="far fa-long-arrow-right"></i></a></li>
                      <li><a href="javacript:void(0);"><i class="far fa-heart"></i></a></li>
                      <li><add-to-cart-button /></li>
                    </ul>
                  </div>
                </div>
                <div class="product-det">
                  <div class="rate-review">
                    <div class="star-rate-display">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star-half-alt"></i></span>
                    </div>
                    <span class="reviews-disp">(0 Reviews)</span>
                  </div>
                  <span class="product-name">{{ $product->name }}</span>
                  <span class="product-price">
                    <h6>
                      <span>${{ number_format($product->price) }}</span>
                      ${{ number_format($product->sale_price) }}
                    </h6>

                      ${{ number_format($product->sale_price) }}
                  </span>
                </div>
              </div>
            </li>
          @endforeach
        @endif
      </ul> -->

      <ul class="row product-list">
            <li class="col-lg-3 col-sm-6 wow slideInUp delay-200ms" v-for="product in products">
              <div class="product-box">
                <div class="product-img">
                  <!-- @if($product->stock_status == 'in')
                    <span class="prod-label hotproduct">Hot Product</span>
                    @else
                    <span class="prod-label outofstock">Out of stock</span>
                  @endif -->
                  <img v-bind:src="'imgs/products/'+ product.image_name" class="img-srcj"/>
                  <div class="product-actions-wrapper">
                    <ul class="product-actions">
                      <li><a :href="route('shop-details')"><i class="far fa-long-arrow-right"></i></a></li>
                      <li><a href="javacript:void(0);"><i class="far fa-heart"></i></a></li>
                      <li><a href="javascript:void(0);" ><i class="fal fa-shopping-bag"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="product-det">
                  <div class="rate-review">
                    <div class="star-rate-display">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star-half-alt"></i></span>
                    </div>
                    <span class="reviews-disp">(0 Reviews)</span>
                  </div>
                  <span class="product-name">{{ product.name }}</span>
                  <span class="product-price">
                    <h6>
                      <span class="line-through">${{ product.price }}</span>
                    </h6>

                      ${{ product.sale_price }}
                  </span>
                </div>
              </div>
            </li>

      </ul> 

      <div class="text-center mt-std">
        <a href="javascript:void(0);" class="btn-srcj">SHOW MORE <span><i class="far fa-long-arrow-right"></i></span></a>
      </div>
    </div>
  </section>
  <!-- /PRODUCTS -->
</template>

<script setup>
	defineProps({
		products: {
			type: Array,
		},
	});
</script>

