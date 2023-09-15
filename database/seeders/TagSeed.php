<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Programação'],
            ['name' => 'TI'],
            ['name' => 'Backend'],
            ['name' => 'Frontend'],
            ['name' => 'Infraestrutura'],
            ['name' => 'PHP'],
            ['name' => 'Laravel'],
        ];

        collect($data)->each(fn($tag) => Tag::create($tag));

    }
}
