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
    public function setId($uuid)
    {
        return $this->repository->setId($uuid);
    }
    
    /**
     * Criar um novo cliente.
     * @param array $data
     * @return mixed
     */
    public function createNew(array $data)
    {
        return $this->repository->create($data);
    }
    
    /**
     * Altera os dodos do cliente.
     * @param array $data
     * @param $uuid
     * @return mixed
     */
    public function updateData(array $data, $uuid)
    {
        return $this->repository->update($data);
    }
    
    /**
     * Exclui um cliente específico que não seja da Cidade de São Paulo.
     * @param $uuid
     * @return mixed
     */
    public function deleteRegister($uuid)
    {
        return $this->repository->delete($uuid);
    }
    
    
}