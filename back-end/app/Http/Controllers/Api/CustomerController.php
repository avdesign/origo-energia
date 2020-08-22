<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use App\Services\CustomerService;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomersResource;
use App\Http\Requests\StoreUpdateCustomer;
use App\Http\Resources\CustomerPlansResource;

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
     * @return CustomersResource
     */
    public function index()
    {
        return CustomersResource::collection($this->customerService->getAll());
    }
    
    /**
     * Adicionar um novo cliente.
     * @param StoreCustomer $request
     * @return CustomerPlansResource
     */
    public function store(StoreUpdateCustomer $request)
    {
        $customer = $this->customerService->createNew($request->all());
        return new CustomerPlansResource($this->customerService->setId($customer->uuid));
    }
    
    /**
     * Obter um cliente específico.
     * @param $uuid
     * @return CustomerPlansResource
     */
    public function show($uuid)
    {
        if ($this->customerService->setId($uuid))
            return new CustomerPlansResource($this->customerService->setId($uuid));
    }


    /**
     * Altera os dados do Cliente
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCustomer $request, $uuid)
    {
        if ($this->customerService->updateData($request->all(), $uuid))
            return new CustomerPlansResource($this->customerService->setId($uuid));
    }
    
    /**
     * Exclui um cliente específico que não seja da Cidade de São Paulo.
     * @param $uuid
     * @return mixed
     */
    public function destroy($uuid)
    {
        return $this->customerService->deleteRegister($uuid);
    }
}
