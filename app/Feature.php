<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'fa_icon',
        'highlight_text',
        'small_description',
        'full_description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
     * The services that belong to the user.
     */
    // public function provider()
    // {
    //     return $this->belongsTo('App\User');
    // }

}
