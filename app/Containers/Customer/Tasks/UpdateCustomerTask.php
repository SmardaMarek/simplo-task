<?php
namespace App\Containers\Customer\Tasks;
use App\Containers\Customer\Data\Repositories\CustomerRepositoryInterface;

class UpdateCustomerTask
{
    public function __construct(
        protected CustomerRepositoryInterface $repository
    ) {

    }

    public function run(int $id, array $data)
    {
        return $this->repository->update($id, $data);
    }
}