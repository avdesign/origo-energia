<?php
    
namespace App\Repositories\Contracts;


interface CustomerInterface
{
    // É obrigatório criar os metódos na classe Repositories/CustomerRepository.
    public function getAll();
    public function setId($id);
}