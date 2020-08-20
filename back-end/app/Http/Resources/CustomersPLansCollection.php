<?php

namespace App\Http\Resources;

use App\Models\Customer;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomersPLansCollection extends ResourceCollection
{
    /**
     * @var Customer
     */
    private $customer;
    
    public function __construct($resource, Customer $customer)
    {
        parent::__construct($resource);
        $this->customer = $customer;
    }
    
    /**
     * Transforme a coleção de recursos em um array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'cliente' => new CustomersResource(),
            'planos' => $this->collection->map(function ($plan) {
                return new PLansResource($plan);
            })
        ];
    }
}
