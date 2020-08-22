<?php
    
namespace App\Repositories;

use App\Models\Customer;
use App\Helpers\CityHelper;
use App\Repositories\Contracts\CustomerInterface;

class CustomerRepository implements CustomerInterface
{
    protected $entity;
    
    public function __construct(Customer $state)
    {
        $this->entity = $state;
    }
    
    /**
     * Create Customer
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->entity->create($data);
    }
    
    /**
     * Update Customer
     * @param array $data
     * @param $uuid
     * @return mixed
     */
    public function update(array $data, $uuid)
    {
        $customer = $this->setId($uuid);
        return $customer->update($data);
    }
    
    /**
     * Delete Customer
     * @param $uuid
     * @return mixed
     */
    public function delete($uuid)
    {
        $customer = $this->setId($uuid);
        $verifyCity = CityHelper::verifyCity($customer->state);
        if (!$verifyCity)
            return $customer->delete();
        
        return response()->json([
            'error' => true,
            'message' => "{$customer->state->name} não pode ser excluida!"
        ]);
    }
    
    /**
     * Obter todos os clientes
     * @return Customer
     */
    public function getAll()
    {
        return $this->entity->all();
    }
    
    /**
     * Obter um cliente específico
     * @return Customer
     */
    public function setId($uuid)
    {
        return $this->entity->where('uuid', $uuid)->first();
    }
    
}