<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['front-end', 'back-end', 'full-stuck', 'html/css'];

        foreach ($types as $typeName) {
            $type = new Type();
            $type->name = $typeName;
            $type->save();
        }
    }
}
