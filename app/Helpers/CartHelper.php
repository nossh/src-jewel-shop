<?php


namespace App\Helpers;


use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Arr;


class CartHelper
{
    public static function getCartsCount(): int
    {
        $request = \request();
        $user = $request->user();
        if ($user) {
            return Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $carts = self::getCookieCarts();

            return array_reduce(
                $carts,
                fn($carry, $item) => $carry + $item['quantity'],
                0
            );
        }
    }

    public static function getCarts()
    {
        $request = \request();
        $user = $request->user();
        if ($user) {
            return Cart::where('user_id', $user->id)->get()->map(
                fn($item) => ['product_id' => $item->product_id, 'quantity' => $item->quantity]
            );
        } else {
            return self::getCookieCarts();
        }
    }

    public static function getCookieCarts()
    {
        $request = \request();
        return json_decode($request->cookie('cart', '[]'), true);
    }

    public static function getCountFromItems($carts)
    {
        return array_reduce(
            $carts,
            fn($carry, $item) => $carry + $item['quantity'],
            0
        );
    }

    public static function moveCartsIntoDb()
    {
        $request = \request();
        $carts = self::getCookieCarts();
        $dbCarts = Cart::where(['user_id' => $request->user()->id])->get()->keyBy('product_id');
        $newCarts = [];
        foreach ($carts as $cart) {
            if (isset($dbCarts[$cart['product_id']])) {
                continue;
            }
            $newCarts[] = [
                'user_id' => $request->user()->id,
                'product_id' => $cart['product_id'],
                'quantity' => $cart['quantity'],
            ];
        }

        if (!empty($newCarts)) {
            Cart::insert($newCarts);
        }
    }


    public static function getProductsAndCarts(): array|\Illuminate\Database\Eloquent\Collection
    {
        $carts = self::getCarts();
        $ids = Arr::pluck($carts, 'product_id');
        $products = Product::query()->whereIn('id', $ids)->get();
        $carts = Arr::keyBy($carts, 'product_id');

        return [$products, $carts];
    }
}
