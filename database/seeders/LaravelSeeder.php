<?php

namespace Database\Seeders;
use App\Models\Componentes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LaravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Componentes::create([
            'codigo' => 'code',
            'descripcion' => 'descripcion code.',
            'cantidad' => 'A',
            'precio' => 'B',
        ]);
    }
}