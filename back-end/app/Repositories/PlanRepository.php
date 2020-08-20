<?php
    
namespace App\Repositories;


use App\Models\Plan;
use App\Repositories\Contracts\PlanInterface;

class PlanRepository implements PlanInterface
{
    protected $entity;
    
    public function __construct(Plan $state)
    {
        $this->entity = $state;
    }
    
    /**
     * Obter todos os planos
     * @return Plan[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->entity->all();
    }
}