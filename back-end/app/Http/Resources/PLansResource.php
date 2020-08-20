<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PLansResource extends JsonResource
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
            'nome' => $this->name,
            'preco' => (float) $this->price
        ];
    }
}
