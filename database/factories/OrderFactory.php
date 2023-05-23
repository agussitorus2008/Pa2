<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $createdAt = $this->faker->randomElement([now(), now()->subDays(365)]);

        return [
            'code' => $this->faker->unique()->randomNumber(),
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'total' => $this->faker->randomFloat(2, 10, 100),
            'payment' => $this->faker->randomElement(['Emoney']),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
            'created_at' => $createdAt,
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }
}
