<?php

namespace Database\Factories;

use App\Models\Categorias;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $text=$this->faker->unique->sentence();
        return [
            'Nombre'=>$text,
            'slug'=>Str::slug($text),
            'Descripcion'=>$this->faker->paragraph(),
            'Cantidad'=>$this->faker->numberBetween(5,50),
            'Precio'=>$this->faker->randomFloat(2,10,500),
            'id_category'=>Categorias::all()->random()->id,
        ];
    }
}
