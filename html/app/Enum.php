<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $product_id
 * @property string $keys
 * @property string $value
 * @property int $order
 * @property Product $product
 */
class Enum extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'keys', 'value', 'order'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
