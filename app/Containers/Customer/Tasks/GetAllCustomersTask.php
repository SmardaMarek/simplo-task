<?php
namespace App\Containers\Customer\Tasks;
use App\Containers\Customer\Data\Repositories\CustomerRepositoryInterface;

class GetAllCustomersTask
{
    public function __construct(protected CustomerRepositoryInterface $repository)
    {
    }

    public function run()
    {
        return $this->repository->all();
    }
}