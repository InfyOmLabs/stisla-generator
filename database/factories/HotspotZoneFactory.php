<?php

namespace Database\Factories;

use App\Models\HotspotZone;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotspotZoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HotspotZone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'zone_id' => $this->faker->word,
        'zone_title' => $this->faker->word,
        'device_brand' => $this->faker->word,
        'device_mac' => $this->faker->word,
        'device_serial' => $this->faker->word,
        'onu_mac' => $this->faker->word,
        'onu_brand' => $this->faker->word,
        'card_seller' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
