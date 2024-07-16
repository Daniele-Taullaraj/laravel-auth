<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = new Type();
        $type->name = "Full-stack";
        $type->description = "Progetti sviluppati sia lato frontend che lato backend";
        $type->save();

        $type = new Type();
        $type->name = "Back-end";
        $type->description = "La parte che gestisce la logica, i dati e i server di un'applicazione";
        $type->save();

        $type = new Type();
        $type->name = "Front-end";
        $type->description = "La parte visibile e interattiva di un'applicazione web";
        $type->save();
    }
}
