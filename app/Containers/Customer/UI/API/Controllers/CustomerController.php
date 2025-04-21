<?php

namespace App\Containers\Customer\UI\API\Controllers;

use App\Containers\Customer\Actions\CreateCustomerAction;
use App\Containers\Customer\Actions\DeleteCustomerAction;
use App\Containers\Customer\Actions\UpdateCustomerAction;
use App\Containers\Customer\Actions\GetAllCustomersAction;
use App\Containers\Customer\Actions\FindCustomerByIdAction;
use App\Containers\Customer\Resources\CustomerResource;
use Illuminate\Http\Request;

class CustomerController
{

    public function index(GetAllCustomersAction $action)
    {
        $customers = $action->run();
        return CustomerResource::collection($customers);
    }


    public function create(Request $request, CreateCustomerAction $action)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email',
            'group_ids' => 'sometimes|array',
            'group_ids.*' => 'exists:customer_groups,id',
        ]);

        $customer = $action->run($data);

        return new CustomerResource($customer);
    }


    public function show($id, FindCustomerByIdAction $action, Request $request)
    {
        $customer = $action->run($id);

        if ($request->query('groups') === 'true') {
            $customer->load('groups');
        }

        return new CustomerResource($customer);
    }

    public function update(Request $request, UpdateCustomerAction $action, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email,' . $id,
            'group_ids' => 'sometimes|array',
            'group_ids.*' => 'exists:customer_groups,id',
        ]);

        $customer = $action->run($id, $data);


        return new CustomerResource($customer);
    }


    public function delete(DeleteCustomerAction $action, $id)
    {
        $action->run($id);
        return response()->json(['message' => 'Zákazník byl úspěšně smazán'], 200);
    }
}
