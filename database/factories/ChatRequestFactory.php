<?php

namespace Database\Factories;

use App\Models\ChatRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChatRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'chatment_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'chatment_email' => $this->faker->unique()->safeEmail(),
            'chat_request_status' => $this->faker->word(),
            'image_path' => rand(0, 1),
        ];
    }
}
