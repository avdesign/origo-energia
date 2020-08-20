<?php

namespace App\Services;


use App\Repositories\Contracts\CustomerInterface;

class CustomerService
{
    /**
     * @var PlanInterface
     */
    private $repository;
    
    public function __construct(CustomerInterface $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * Retorna todos os Clientes.
     * @return mixed
     */
    public function getAll()
    {
        return $this->repository->getAll();
    }
    
    /**
     * Retorna um cliente específico.
     * @param $id
     * @return mixed
     */
    public function setId($id)
    {
        return $this->repository->setId($id);
    }
    
    
}