<template>
	<div class="col-lg-4">
        <div class="cart-wrapper bggrey">
            <ul class="cart-table">
                <li>
                    <div>
                        Sub total
                    </div>
                    <div>
                        $200.00
                    </div>
                </li>
                <li>
                    <div>
                        Tax
                    </div>
                    <div>
                        $20.00
                    </div>
                </li>
                <li>
                    <div>
                        Delivery
                    </div>
                    <div>
                        $30.00
                    </div>
                </li>
                <li>
                    <div>
                        Total price
                    </div>
                    <div>
                        $250.00
                    </div>
                </li>

                <a :href="route('checkout')" class="btn-srcj txtup mt-std">Proceed to Checkout</a>
            </ul>
        </div>
    </div>
</template>