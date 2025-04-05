<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $cart = Cart::content();

//        foreach ($cart as $item) {
//            $product = Product::find($item->id);
//            $item->product_quantity = $product->quantity;
//        }

        return view('customer.cart', compact('cart'));
    }

    public function save(Request $request, Product $product)
    {
        if ($request->quantity > $product->quantity) {
            toast('Vui lòng nhập số lượng nhỏ hơn '.$product->quantity, 'error');

            return redirect()->back();
        }

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => (int) $request->quantity,
            'price' => $product->final_price,
            'weight' => 1,
            'options' => [
                'avatar_url' => $product->avatar_url,
            ],
        ]);

        Cart::setGlobalTax(8);

        return redirect()->route('cart.show');
    }

    public function update(Request $request, $id)
    {
        return Cart::update($id, (int) $request->quantity);
    }

    public function remove($id)
    {
        Cart::remove($id);

        return redirect()->route('cart.show');
    }

    public function store(Request $request, Product $product)
    {
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => (int) $request->quantity,
            'price' => $product->final_price,
            'weight' => 1,
            'options' => [
                'avatar_url' => $product->avatar_url,
            ],
        ]);

        Cart::setGlobalTax(8);

        return Cart::count();
    }
}
