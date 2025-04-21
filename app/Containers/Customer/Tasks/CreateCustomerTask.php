<?php

namespace App\Containers\Customer\Tasks;

use App\Containers\Customer\Data\Repositories\CustomerRepositoryInterface;

class CreateCustomerTask
{
    public function __construct(
        protected CustomerRepositoryInterface $repository
    ) {
    }

    public function run(array $data)
    {
        return $this->repository->create($data);
    }
}
