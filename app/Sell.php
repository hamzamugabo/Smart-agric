<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $dates = [

    ];
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sells';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'location',
        'contact',
        'user_id',
        'seller',
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    public function user()
    {
     return $this->belongsTo(User::class);
    }
}
