<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $contact
 * @property string $query
 */
class Enquiry extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'enquiry';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'contact', 'query'];

}
