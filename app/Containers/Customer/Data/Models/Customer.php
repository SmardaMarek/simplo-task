<?php

namespace App\Containers\Customer\Data\Models;
use App\Containers\CustomerGroup\Data\Models\CustomerGroup;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'email',
    ];

    public function groups()
    {
        return $this->belongsToMany(CustomerGroup::class, 'customer_customer_group');
    }

}
