<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property string $cycle
 * @property Enum[] $enums
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'price', 'cycle'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function property()
    {
        return $this->hasMany('App\Enum')->orderBy('order', 'ASC');
    }
}
