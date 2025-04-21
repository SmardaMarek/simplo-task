<?php
namespace App\Containers\Customer\Tasks;

use App\Containers\Customer\Data\Repositories\CustomerRepositoryInterface;

class DeleteCustomerTask
{
    public function __construct(protected CustomerRepositoryInterface $repository)
    {
    }

    public function run(int $id)
    {
        return $this->repository->delete($id);
    }
}