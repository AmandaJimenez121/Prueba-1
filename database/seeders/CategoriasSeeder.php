<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorias::create([
            'Nombre'=>'LAPTOPS',
            'slug'=>'laptops'
        ]);
        Categorias::create([
            'Nombre'=>'TABLETS',
            'slug'=>'tablets'
        ]);
        Categorias::create([
            'Nombre'=>'TECLADOS',
            'slug'=>'teclados'
        ]);
        Categorias::create([
            'Nombre'=>'MOUSE',
            'slug'=>'mouse'
        ]);
    }
}
