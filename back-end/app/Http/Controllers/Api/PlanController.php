<?php

namespace App\Http\Controllers\Api;

use App\Services\PlanService;
use App\Http\Controllers\Controller;
use App\Http\Resources\PLansResource;

class PlanController extends Controller
{
    /**
     * @var PlanService
     */
    private $planService;
    
    public function __construct(PlanService $planService)
    {
        $this->planService = $planService;
    }
    
    /**
     * Retorna uma lista dos planos.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlans()
    {
        return PLansResource::collection($this->planService->getAll());
    }
}
