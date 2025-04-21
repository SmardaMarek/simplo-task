<?php

namespace App\Containers\Customer\Actions;

use App\Containers\Customer\Tasks\GetAllCustomersTask;

class GetAllCustomersAction
{
    public function __construct(
        protected GetAllCustomersTask $task
    ) {
    }

    public function run()
    {
        return $this->task->run();
    }
}
