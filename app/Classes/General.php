<?php
namespace App\Classes;
use App\Models\Order;
use Illuminate\Support\Str;

class General {

    public static function generateReference()
    {
        $reference = strtoupper(Str::random());

        if ( is_null(Order::where('order_id', $reference)->first()) ) {

            return $reference;
        }

        return self::generateReference();
    }

}
