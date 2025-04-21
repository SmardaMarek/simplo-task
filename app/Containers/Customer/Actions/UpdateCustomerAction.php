<?php

namespace App\Containers\Customer\Actions;

use App\Containers\Customer\Tasks\UpdateCustomerTask;
use App\Containers\Customer\Tasks\AttachGroupsToCustomerTask;

class UpdateCustomerAction
{
    public function __construct(
        protected UpdateCustomerTask $updateTask,
        protected AttachGroupsToCustomerTask $attachTask,
    ) {
    }

    public function run(int $id, array $data)
    {
        $customer = $this->updateTask->run($id, $data);

        if (isset($data['group_ids'])) {
            $this->attachTask->run($customer, $data['group_ids']);
        }

        return $customer;
    }
}
