<?php

use App\Models\College;
use App\Models\School;
use Illuminate\Database\Seeder;

class DemoDataCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = School\Student::inRandomOrder()->take(100)->get();

        $colleges = factory(College\College::class, 10)->create();
        $programs = factory(College\Program::class, 30)->create();
        $admissions = factory(College\Admission::class, 3)->create();

        $students->each(function($student) use ($colleges, $programs, $admissions) {
            $colleger = factory(College\Colleger::class)->make([
                'generation' => $student->generation + 3
            ]);

            $colleger->student()->associate($student);
            $colleger->college()->associate($colleges->random());
            $colleger->program()->associate($programs->random());
            $colleger->admission()->associate($admissions->random());

            $colleger->save();
        });
    }
}
