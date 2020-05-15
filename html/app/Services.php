<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $discription
 * @property int $start
 * @property int $expiry
 * @property boolean $active
 * @property User $user
 * @property Payment[] $payments
 */
class Services extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'discription', 'start', 'expiry', 'active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function property()
    {
        return $this->hasMany('App\Enum','service_id');
    }

}
