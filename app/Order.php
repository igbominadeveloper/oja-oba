<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $receipt;

    public function setReceiptNumberAttribute()
    {
        $receiptNumber = random_int(3000,900000).'-'.ucwords(str_random(6));
        return $this->receipt = env('APP_NAME').'-00'.$receiptNumber;
    }

    public function getReceiptNumber()
    {
        return $this->receipt;
    }
}
