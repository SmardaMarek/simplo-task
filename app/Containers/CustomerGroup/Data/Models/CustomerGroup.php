<?php
namespace App\Containers\CustomerGroup\Data\Models;

use Illuminate\Database\Eloquent\Model;
use App\Containers\Customer\Data\Models\Customer;

class CustomerGroup extends Model
{
    protected $fillable = ['name', 'customer_id'];

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_customer_group');
    }
}
