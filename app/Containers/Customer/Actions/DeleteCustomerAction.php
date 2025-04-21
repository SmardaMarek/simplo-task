<?php
namespace App\Containers\Customer\Actions;
use App\Containers\Customer\Tasks\DeleteCustomerTask;

class DeleteCustomerAction
{
    public function __construct(protected DeleteCustomerTask $deleteTask)
    {
    }

    public function run(int $id)
    {
        return $this->deleteTask->run($id);
    }
}