<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class CustomersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'uuid' => $this->uuid,
            'estado' => $this->state->name,
            'nome' => $this->name,
            'email' => $this->email,
            'telefone' => $this->phone,
            'cidade' => $this->city,
            'data_nascimento' =>  Carbon::parse($this->birth_date)->format('d/m/Y')
        ];
    }
}
