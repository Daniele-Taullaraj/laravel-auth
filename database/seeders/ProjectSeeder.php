<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->sentence(3);
            $newProject->description = $faker->paragraph(2);
            $newProject->type_id = $faker->numberBetween(1, 3);
            $newProject->start_date = $faker->date($format = 'Y-m-d', $max = 'now');
            $newProject->end_date = $faker->date($format = 'Y-m-d', $max = 'now');
            $newProject->status = $faker->numberBetween(0, 1);
            $newProject->save();
        }
    }
}
