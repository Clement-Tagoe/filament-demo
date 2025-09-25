<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderAddress extends Model
{
    /** @use HasFactory<OrderAddressFactory> */
    use HasFactory;

    protected $table = 'shop_order_addresses';

    /** @return MorphTo<Model, $this> */
    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }
}
