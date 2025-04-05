<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use willvincent\Rateable\Rateable;

class Product extends Model
{
    use HasFactory, SoftDeletes, Rateable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'avatar_url',
        'user_id',
        'discount',
        'discount_deadline',
        'quantity',
        'brand_id',
    ];

    protected $appends = [
        'final_price',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProduct::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    protected function finalPrice(): Attribute
    {
        $price = $this->price;

        if ($this->discount) {
            if ($this->discount_deadline) {
                $now = Carbon::now();
                $discountDeadline = Carbon::createFromFormat('Y-m-d', $this->discount_deadline);

                if ($now->lte($discountDeadline)) {
                    $price = $this->price - ($this->price * $this->discount / 100);
                }
            } else {
                $price = $this->price - ($this->price * $this->discount / 100);
            }
        }

        return Attribute::make(
            get: fn () => $price,
        );
    }
}
