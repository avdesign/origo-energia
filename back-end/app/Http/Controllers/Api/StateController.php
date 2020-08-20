<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\StateResource;
use App\Services\StateService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StateController extends Controller
{
    /**
     * @var StateService
     */
    protected $stateService;
    
    public function __construct(StateService $stateService)
    {
        $this->stateService = $stateService;
    }
    
    /**
     * Retorna uma lista dos estados.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStates()
    {
        return StateResource::collection($this->stateService->getAll());
    }
}
