<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Skills;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skills>
 */
class SkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->words($no=2,$astext=true);
        $slug = Str::slug($name);
        return [
            "name" => $name,
            "slug" => $slug
        ];
    }
}
