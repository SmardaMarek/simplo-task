<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Containers\CustomerGroup\Data\Seeders\CustomerGroupSeeder;
use App\Containers\CustomerGroup\Data\Seeders\CustomerCustomerGroupSeeder;
use App\Containers\Customer\Data\Seeders\CustomerSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CustomerSeeder::class,
            CustomerGroupSeeder::class,
            CustomerCustomerGroupSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
