<?php

namespace App\Models\College;

use App\Models\College\Colleger;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'public'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the collegers of the college.
     */
    public function collegers()
    {
        return $this->hasMany(Colleger::class);
    }
}
