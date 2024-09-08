<?php

namespace Database\Factories;

use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

class MataKuliahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MataKuliah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kodemk' => $this->faker->unique()->bothify('????####'),
            'nama' => $this->faker->words(3, true),
            'sks' => $this->faker->numberBetween(1, 6),
        ];
    }
}
