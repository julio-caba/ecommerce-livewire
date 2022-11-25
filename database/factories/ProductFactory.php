<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => 200,
            'description' => $this->faker->text($maxNbChars = 200),
            'thumbnail' => "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/935b0d26-c59e-4d1e-95b0-31074a3a45e8/dd85jiy-b86eeed2-f489-4669-8e78-9fc8075f9e9c.jpg/v1/fill/w_1024,h_400,q_75,strp/restful_red_by_maxre_dd85jiy-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NDAwIiwicGF0aCI6IlwvZlwvOTM1YjBkMjYtYzU5ZS00ZDFlLTk1YjAtMzEwNzRhM2E0NWU4XC9kZDg1aml5LWI4NmVlZWQyLWY0ODktNDY2OS04ZTc4LTlmYzgwNzVmOWU5Yy5qcGciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.vFNtsfomnIioP11EVAKv7lBbgBg8J4W8FrXplvwWWUU"
        ];
    }
}
