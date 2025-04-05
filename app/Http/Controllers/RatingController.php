<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use willvincent\Rateable\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::where('rateable_type', Order::class)
            ->with('user', 'rateable')
            ->latest()->get();

        return view('rating.index', compact('ratings'));
    }

    public function update(Request $request, Rating $rating)
    {
        $rating->is_active = $request->status;
        $products = $rating->rateable->products;

        foreach ($products as $product) {
            $product->ratings()->where([
                'user_id' => $rating->user_id,
                'comment' => $rating->comment,
            ])->update(['is_active' => $request->status]);
        }

        return $rating->save();
    }
}
