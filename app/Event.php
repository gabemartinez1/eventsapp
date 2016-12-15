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
        'name', 'description', 'setup', 'event-start', 'event-end', 'clean-up', 'entertainment-end', 'spaces', 'guests', 'event-type', 'even-contact', 'entrances', 'ops-needs', 'security-needs', 'vip', 'parking', 'admission', 'billing'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = ['created_at', 'updated_at', 'id'];

}
