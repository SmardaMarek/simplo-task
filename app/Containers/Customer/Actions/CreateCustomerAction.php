<?php

namespace App\Containers\Customer\Actions;

use App\Containers\Customer\Tasks\AttachGroupsToCustomerTask;
use App\Containers\Customer\Tasks\CreateCustomerTask;

class CreateCustomerAction
{
    public function __construct(
        protected CreateCustomerTask $createTask,
        protected AttachGroupsToCustomerTask $attachTask,
    ) {
    }

    public function run(array $data)
    {
        $customer = $this->createTask->run($data);

        if (isset($data['group_ids'])) {
            $this->attachTask->run($customer, $data['group_ids']);
        }

        return $customer;
    }
}
