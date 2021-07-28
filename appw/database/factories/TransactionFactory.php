<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaction_date' => $this->faker->date(),
            'description' => \Str::random(40),
            'credit' => rand(1000,2000),
            'debit' => rand(1000,2000),
            'running_balance' => rand(10000,20000),
        ];
    }
}
