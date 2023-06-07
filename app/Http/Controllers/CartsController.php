<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use App\Helpers\CartHelper;
use App\Models\Cart;
use App\Models\Product;
use Inertia\Inertia;
use Inertia\Response;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        list($products, $carts) = CartHelper::getProductsAndCarts();
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $carts[$product->id]['quantity'];
        }

        return Inertia::render('Cart',
            [
                'carts' => $carts,
                'products' => $products,
                'total' => $total
            ]
        );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {
        $quantity = $request->post('quantity', 1);
        $user = $request->user();
        if ($user) {

            $cart = Cart::where(['user_id' => $user->id, 'product_id' => $product->id])->first();

            if ($cart) {
                $cart->quantity += $quantity;
                $cart->update();
            } else {
                $data = [
                    'user_id' => $request->user()->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                ];
                Cart::create($data);
            }

            return response([
                'count' => Cart::getCartsCount()
            ]);
        } else {
            $carts = json_decode($request->cookie('cart', '[]'), true);
            $productFound = false;
            foreach ($carts as &$item) {
                if ($item['product_id'] === $product->id) {
                    $item['quantity'] += $quantity;
                    $productFound = true;
                    break;
                }
            }
            if (!$productFound) {
                $carts[] = [
                    'user_id' => null,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price
                ];
            }
            Cookie::queue('cart', json_encode($carts), 60 * 24 * 30);

            return response(['count' => Cart::getCountFromItems($carts)]);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $quantity = (int)$request->post('quantity');
        $user = $request->user();
        if ($user) {
            CartItem::where(['user_id' => $request->user()->id, 'product_id' => $product->id])->update(['quantity' => $quantity]);

            return response([
                'count' => Cart::getCartsCount(),
            ]);
        } else {
            $carts = json_decode($request->cookie('cart', '[]'), true);
            foreach ($carts as &$item) {
                if ($item['product_id'] === $product->id) {
                    $item['quantity'] = $quantity;
                    break;
                }
            }
            Cookie::queue('cart', json_encode($carts), 60 * 24 * 30);

            return response(['count' => Cart::getCountFromItems($carts)]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Product $product)
    {
        $user = $request->user();
        if ($user) {
            $cart = CartItem::query()->where(['user_id' => $user->id, 'product_id' => $product->id])->first();
            if ($cart) {
                $cart->delete();
            }

            return response([
                'count' => Cart::getCartsCount(),
            ]);
        } else {
            $carts = json_decode($request->cookie('cart', '[]'), true);
            foreach ($carts as $i => &$item) {
                if ($item['product_id'] === $product->id) {
                    array_splice($carts, $i, 1);
                    break;
                }
            }
            Cookie::queue('cart', json_encode($carts), 60 * 24 * 30);

            return response(['count' => Cart::getCountFromItems($carts)]);
        }
    }
}
