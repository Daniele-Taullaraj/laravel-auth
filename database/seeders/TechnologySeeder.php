<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTech = new Technology();
        $newTech->name = 'JavaScript';
        $newTech->description = '1 used for bla bla bla';
        $newTech->save();

        $newTech = new Technology();
        $newTech->name = 'PHP';
        $newTech->description = '2 used for bla bla bla';
        $newTech->save();

        $newTech = new Technology();
        $newTech->name = 'Python';
        $newTech->description = '3 used for bla bla bla';
        $newTech->save();

        $newTech = new Technology();
        $newTech->name = 'Laravel';
        $newTech->description = '4 used for bla bla bla';
        $newTech->save();
    }
}
