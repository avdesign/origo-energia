<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class State extends Model
    {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['uf', 'name'];
        
        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = false;
        
        /**
         * Relationships
         * Obter os clientes de um estado específico.
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function customers()
        {
            return $this->hasMany(Customer::class);
        }
    }
