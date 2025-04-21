<?php

namespace App\Containers\CustomerGroup\Data\Seeders;

use Illuminate\Database\Seeder;
use App\Containers\CustomerGroup\Data\Models\CustomerGroup;

class CustomerGroupSeeder extends Seeder
{
    public function run(): void
    {
        // Pokud zatím nemáš zákazníky, můžeš dočasně zakomentovat customer_id
        CustomerGroup::insert([
            [
                'name' => 'Velkoodběratelé',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maloobchod',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Zahraniční partneři',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VIP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


    }
}
