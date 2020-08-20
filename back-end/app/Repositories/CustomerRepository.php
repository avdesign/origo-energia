<?php
    
namespace App\Repositories;


use App\Models\Customer;
use App\Repositories\Contracts\CustomerInterface;

class CustomerRepository implements CustomerInterface
{
    protected $entity;
    
    public function __construct(Customer $state)
    {
        $this->entity = $state;
    }
    
    /**
     * Obter todos os clientes
     * @return Customer[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->entity->all();
    }
    
    /**
     * Obter um cliente específico
     * @return Customer[]|\Illuminate\Database\Eloquent\Collection
     */
    public function setId($id)
    {
        return $this->entity->find($id);
    }
}