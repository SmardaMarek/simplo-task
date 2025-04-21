<?php
namespace App\Containers\Customer\Tasks;
use App\Containers\Customer\Data\Repositories\CustomerRepositoryInterface;

class FindCustomerByIdTask
{
    public function __construct(protected CustomerRepositoryInterface $repository)
    {
    }

    public function run(int $id)
    {
        return $this->repository->find($id);
    }
}