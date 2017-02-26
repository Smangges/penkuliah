<?php

namespace App\Models\School;

use App\Models\School\Score;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
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
     * Get the scores of the subject.
     */
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
