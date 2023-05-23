<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFactory extends Model
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return 
        [
            'name' => $this->faker->words('store'),
            'description' => $this->faker->words('Banco PingApp','Financeira Assert')
                
        ];
            
    }
}
