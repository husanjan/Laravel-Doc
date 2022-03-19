<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->words(3,true),
            'content'=>$this->faker->paragraph(1),

            'updated_at'=>$this->faker->dateTime(),
            'rubric_id'=>$this->faker->numberBetween(1,5),
        ];
    }
}
