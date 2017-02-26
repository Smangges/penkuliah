<?php

namespace App\Models\School;

use App\Models\School\Student;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['semester', 'position'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the student that owns the rank record.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
