<?php

use App\Models\School;
use Illuminate\Database\Seeder;

class DemoDataSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjectNames = [
            'Bahasa Indonesia',
            'Bahasa Inggris',
            'Matematika',
            'Fisika',
            'Kimia',
            'Biologi'
        ];

        $generations = [
            2010,
            2011,
            2012,
            2013
        ];

        $subjects = collect([]);

        foreach ($subjectNames as $subjectName) {
            $subjects->push(factory(School\Subject::class)->create([
                'name' => $subjectName
            ]));
        }

        $pos = 1;

        foreach ($generations as $generation) {
            factory(School\Student::class, 40)
                ->create(['generation' => $generation])
                ->each(function ($student) use ($pos, $subjects) {
                    for ($sem = 1; $sem <= 6; $sem++) {
                        $rank = factory(School\Rank::class)->make([
                            'semester' => $sem,
                            'position' => $pos
                        ]);

                        $rank->student()->associate($student);
                        $rank->save();

                        foreach ($subjects as $subject) {
                            $score = factory(School\Score::class)->make([
                                'semester' => $sem
                            ]);

                            $score->student()->associate($student);
                            $score->subject()->associate($subject);

                            $score->save();
                        }
                    }

                    $pos++;
                });
        }
    }
}
