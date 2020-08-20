<?php

namespace App\Services;


use App\Repositories\Contracts\StateInterface;

class StateService
{
    /**
     * @var StateInterface
     */
    private $repository;
    
    public function __construct(StateInterface $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * Retorna todos os Estados.
     * @return mixed
     */
    public function getAll()
    {
        return $this->repository->getAll();
    }
    
}