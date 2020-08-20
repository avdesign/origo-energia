<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Customer extends Model
    {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'state_id',
            'name',
            'email',
            'phone',
            'city',
            'birth_date'
        ];
        
        /**
         * Relationships
         * Obter o Estado do cliente ($custumer->state).
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function state()
        {
            return $this->belongsTo(State::class);
        }
        
        
        /**
         * Relationships
         * Obter todos os planos de um cliente específico.
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function plans()
        {
            return $this->belongsToMany(Plan::class);
        }
        
        
    }
