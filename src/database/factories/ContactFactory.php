<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'category_id' =>Category::factory(),
            'category_id' =>$this->faker->randomElement(['1.商品のお届けについて', '2.商品の交換について', '3.商品トラブル', '4.ショップへのお問い合わせ', '5.その他']),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他',]),
            'email' => $this->faker->email(),
            'tel1' => $this->faker->randomNumber(3),
            'tel2' => $this->faker->randomNumber(4),
            'tel3' => $this->faker->randomNumber(4),
            'address' => $this->faker->address(),
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->text(10),
        ];
    }
}
