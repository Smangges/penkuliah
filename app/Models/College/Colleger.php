<?php

namespace App\Models\College;

use App\Models\School\Student;
use App\Models\College\College;
use App\Models\College\Program;
use App\Models\College\Admission;
use Illuminate\Database\Eloquent\Model;

class Colleger extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['generation'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the student that owns the colleger record.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the college that owns the colleger record.
     */
    public function college()
    {
        return $this->belongsTo(College::class);
    }

    /**
     * Get the program that owns the colleger record.
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * Get the admission that owns the colleger record.
     */
    public function admission()
    {
        return $this->belongsTo(Admission::class);
    }
}
