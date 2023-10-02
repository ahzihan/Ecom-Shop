<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDetails extends Model
{
    function DetailsPage(){
        return view('pages.details-page');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
