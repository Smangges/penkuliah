<?php

namespace App\Models\College;

use App\Models\College\Colleger;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the collegers of the admission.
     */
    public function collegers()
    {
        return $this->hasMany(Colleger::class);
    }
}
