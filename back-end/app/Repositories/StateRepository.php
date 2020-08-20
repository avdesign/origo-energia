<?php
    
namespace App\Repositories;


use App\Models\State;
use App\Repositories\Contracts\StateInterface;

class StateRepository implements StateInterface
{
    protected $entity;
    
    public function __construct(State $state)
    {
        $this->entity = $state;
    }
    
    /**
     * Obter todos os estados
     * @return State[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->entity->all();
    }
}