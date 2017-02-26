<?php

namespace App\Models\School;

use App\Models\College\Colleger;
use App\Models\School\Rank;
use App\Models\School\Score;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'generation'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the colleger record associated with the student.
     */
    public function colleger()
    {
        return $this->hasOne(Colleger::class);
    }

    /**
     * Get the ranks of the student.
     */
    public function ranks()
    {
        return $this->hasMany(Rank::class);
    }

    /**
     * Get the scores of the student.
     */
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
