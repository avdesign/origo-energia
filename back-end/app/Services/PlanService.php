<?php

namespace App\Services;


use App\Repositories\Contracts\PlanInterface;

class PlanService
{
    /**
     * @var PlanInterface
     */
    private $repository;
    
    public function __construct(PlanInterface $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * Retorna todos os Planos.
     * @return mixed
     */
    public function getAll()
    {
        return $this->repository->getAll();
    }
    
}