<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Plan extends Model
    {
        protected $fillable = [
            'name',
            'price'
        ];
        
        /**
         * Relationships
         * Obter todos os clientes de um plano específico.
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function customers()
        {
            return $this->belongsToMany(Customer::class);
        }
        
    }
