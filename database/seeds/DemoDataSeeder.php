<?php

use Illuminate\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DemoDataSchoolSeeder::class);
        $this->call(DemoDataCollegeSeeder::class);
    }
}
