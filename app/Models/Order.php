<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Order extends Model
{
    use HasFactory, Rateable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'total',
        'delivery_address',
        'note',
        'tax',
        'user_id',
        'payment_id',
        'is_active',
    ];

    public function scopeActive(Builder $query): void
    {
        $query->where('is_active', true);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order')
            ->withPivot('quantity', 'price');
    }

    public function productVariants()
    {
        return $this->belongsToMany(ProductVariant::class, 'product_order')
            ->withPivot('quantity', 'price');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::created(function ($order) {
            $order->code = 'EG000'.$order->id;
            $order->save();

            $statistic = Statistic::where('date', date('Y-m-d'))->first();

            if ($statistic) {
                $statistic->sales = $statistic->sales + $order->total;
                $statistic->total_orders = $statistic->total_orders + 1;
                $statistic->save();
            } else {
                Statistic::create([
                    'date' => date('Y-m-d'),
                    'sales' => $order->total,
                    'total_orders' => 1,
                ]);
            }
        });

        static::updated(function ($order) {
            if ($order->status === OrderStatus::CANCELED) {
                $statistic = Statistic::where('date', $order->created_at->format('Y-m-d'))->first();

                if ($statistic) {
                    $statistic->sales = $statistic->sales - $order->total;
                    $statistic->total_orders = $statistic->total_orders - 1;
                    $statistic->save();
                }
            }
        });
    }
}
