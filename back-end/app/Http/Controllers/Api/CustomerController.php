<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Services\CustomerService;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerPlanResource;




class CustomerController extends Controller
{
    /**
     * @var CustomerService
     */
    private $customerService;
    
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    /**
     * Retorna uma lista de clientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new CustomerPlanResource($this->customerService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$customer->refresh();
    }
    
    /**
     * Obter um cliente específico.
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        
        if ($this->customerService->setId($id))
            return new CustomerPlanResource($this->customerService->setId($id));
    
        // Criar
    }


    /**
     * Altera os dados do Cliente
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Exclui um cliente específico que não seja da Cidade de São Paulo.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        // Verificar se é da cidade de São Paulo.
        
        $customer->delete();
        return response()->json([], 200);
    }
}
