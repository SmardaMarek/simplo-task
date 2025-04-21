<?php
namespace App\Containers\Customer\Actions;
use App\Containers\Customer\Tasks\FindCustomerByIdTask;

class FindCustomerByIdAction
{
    public function __construct(protected FindCustomerByIdTask $task)
    {
    }

    public function run(int $id)
    {
        return $this->task->run($id);
    }
}