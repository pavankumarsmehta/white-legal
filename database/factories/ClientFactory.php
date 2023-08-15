<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'date_of_birth' => $this->faker->date,
            'nationality' => $this->faker->country,
            'gender' => $this->faker->randomElement(['male', 'female', 'other', 'prefer_not_to_say']),
            'occupation' => $this->faker->word,
            'company_name' => $this->faker->company,
            'company_address' => $this->faker->address,
            'company_registration_number' => $this->faker->word,
            'billing_information' => $this->faker->text,
            'payment_history' => $this->faker->text,
            'retainer_agreement' => $this->faker->text,
            'conflict_of_interest' => $this->faker->text,
            'source_of_referral' => $this->faker->word,
            'notes' => $this->faker->text,
        ];
    }
}
