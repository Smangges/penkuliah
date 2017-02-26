<?php

namespace App\Models\School;

use App\Models\School\Student;
use App\Models\School\Subject;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['semester', 'value'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the student that owns the score record.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the subject that owns the score record.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
