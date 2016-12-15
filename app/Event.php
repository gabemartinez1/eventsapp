<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'type',
    ];

    protected $hidden = ['created_at', 'updated_at', 'user_id'];

}
