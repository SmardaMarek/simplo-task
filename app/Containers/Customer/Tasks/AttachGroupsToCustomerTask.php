<?php
namespace App\Containers\Customer\Tasks;

use App\Containers\Customer\Data\Models\Customer;

class AttachGroupsToCustomerTask
{
    public function run(Customer $customer, array $groupIds = []): void
    {
        $customer->groups()->sync($groupIds);
    }
}
