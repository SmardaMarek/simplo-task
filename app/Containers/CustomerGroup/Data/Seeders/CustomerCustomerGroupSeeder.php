<?php

namespace App\Containers\CustomerGroup\Data\Seeders;

use Illuminate\Database\Seeder;
use App\Containers\Customer\Data\Models\Customer;
use App\Containers\CustomerGroup\Data\Models\CustomerGroup;

class CustomerCustomerGroupSeeder extends Seeder
{
    public function run(): void
    {
        // Load customers
        $customer1 = Customer::find(1);
        $customer2 = Customer::find(2);
        $customer3 = Customer::find(3);
        $customer4 = Customer::find(4);

        // Load groups
        $group1 = CustomerGroup::find(1);
        $group2 = CustomerGroup::find(2);
        $group3 = CustomerGroup::find(3);
        $group4 = CustomerGroup::find(4);

        // Connect customer and groups
        if ($customer1) {
            $customer1->groups()->attach([$group1->id, $group2->id]);
        }
        if ($customer2) {
            $customer2->groups()->attach([$group2->id, $group3->id]);
        }
        if ($customer3) {
            $customer3->groups()->attach([$group3->id, $group4->id]);
        }
        if ($customer4) {
            $customer4->groups()->attach([$group4->id]);
        }
    }
}
