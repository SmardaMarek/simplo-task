<?php

namespace App\Containers\Customer\Data\Seeders;

use Illuminate\Database\Seeder;
use App\Containers\Customer\Data\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            [
                'name' => 'Prokop Pádlo',
                'email' => 'prokop.padlo@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jarmil Leták',
                'email' => 'jarmil.letak@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Petr Diviš',
                'email' => 'petr.divis@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jindřich Skalický',
                'email' => 'jindrich.skalicky@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
